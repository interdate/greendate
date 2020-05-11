<?php 

namespace AppBundle\Services\Messenger;

use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;

class Messenger{ 
	
	public $db;
	public $config;
	public $isNewMessage = false;
	
	public function __construct(){
		$this->config = Config::getInstance();
		$this->config = $this->arrayToObject($this->config);
		$this->db = Database::getInstance($this->config->database);
		//$this->db = $db;
		date_default_timezone_set('Asia/Jerusalem');
	}
	
	public function response($array) {
		return new JsonResponse($array);
	}
	
	public function arrayToObject($array){
		$json = json_encode($array);
		return json_decode($json);
	}
	
	public function isNewMessage(){
		return $this->isNewMessage;		
	}
	
	public function openChat($options){
		$userAttributes = new UserAttributes();
		
		$chatSession = $userAttributes->get($this->config->messengerSession, array($options['userId'], $options['contactId']));
		if(count($chatSession) == 0){
			$userAttributes->post($this->config->messengerSession, array($options['userId'], $options['contactId']));
			return true;
		}
		 
		return false;
	}
	
	public function closeChat($options){		
		$sql = "DELETE FROM " . $this->config->messengerSession->table . " WHERE userId = ? AND contactId = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(1, $options['userId'], \PDO::PARAM_INT);
		$stmt->bindParam(2, $options['contactId'], \PDO::PARAM_INT);
		$success = ($stmt->execute()) ? true : false;
		return $this->response(array('success' => $success));		
	}
	
	public function getActiveChats($options){   
		$userAttributes = new UserAttributes();
		$activeChats = array();
		
		$sql = "
			SELECT
				s.userId, s.contactId, u.username FROM " . $this->config->messengerSession->table . " s
			JOIN
				" . $this->config->users->table . " u
			ON
				(s.contactId = u.id)
			WHERE
				s.userId = ?";
		
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(1, $options['userId'], \PDO::PARAM_INT);
		$stmt->execute();
		$result = $stmt->fetchAll();
		
		foreach ($result as $row){
			
			$chat = new Chat(array(
				'userId' => $row['userId'],
				'contactId' => $row['contactId']
			));
			
			if(!$chat->isForbidden()){
				$activeChats[] = array(
					'id' => $row['contactId'],
					'name' => $row['username']
				);
			}
		}
		
		return $activeChats;
	}
		
	public function checkActiveChatsNewMessages($options){
		$result = array();
		$dateTime = array();
		$userAttributes = new UserAttributes();		
		
		$allChats = $userAttributes->get($this->config->messengerSession, array($options['userId']));		
		
		if(count($allChats)){
		
			$startTime = time();
			while(time() - $startTime < 10) {
				
				foreach ($allChats as $chatOptions){
					$chat = new Chat($chatOptions);
					$newMessages = $chat->getNewMessages();
					
					if(count($newMessages) > 0){
						$allowedToReadMessage = ($chat->user()->isPaying() || $chat->contact()->isPaying()) ? true : false;
						foreach ($newMessages as $message){
							$this->isNewMessage = true;						
							$messageDateObject = new \DateTime($message['date']);
							$timestamp = $messageDateObject->getTimestamp();
							$date = date("m/d/Y", $timestamp);
							$time = date("H:i", $timestamp);
							
							$text = ($message['fromUser'] != $chat->user()->getId() && !$allowedToReadMessage)
								? ''
								: nl2br(urldecode($message['message']))
							;
							
							$result[] = array(
								"id" => $message['messageId'],
								"from" => $chat->contact()->getId(),						
								"text" => $text,  								
								"dateTime" => $date . ' ' . $time, 
								"userImage" => $chat->contact()->getImage(),
								"userName" => $chat->contact()->getNickName(),
								"allowedToRead" => $allowedToReadMessage,
                                'payLinkText' => $chat->config->payment->linkText,
                                'hasPoints' => $chat->user()->hasPoints(),
                                'paymentText' => $this->config->payment->text,
                                'pointsText' => $this->config->points->linkText,
							);						
						}
					}	
				}
				
				if($this->isNewMessage()){
					$timestamp = time();
					$time = date("i:s", $timestamp);
					$dateTime[] = $time;
					
					foreach($result as $message){
						$chat->setMessageAsDelivered($message['id']);
					}
									
					//return $this->response(array("newMessages" => $result, "MinSec" => $dateTime));
					//exit(0);
					return array(
						"newMessages" => $result,
						"currentUserHasPoints" => $chat->user()->hasPoints(),
						"MinSec" => $dateTime,
					);
									
				}
			
				usleep(500);  
			}

		}
		   
		$timestamp = time();
		$time = date("i:s", $timestamp);
		$dateTime[] = $time;
		//return $this->response(array("newMessages" => $result, "MinSec" => $dateTime));
		return array("newMessages" => $result, "MinSec" => $dateTime);
	}

	public function checkMessagesIfRead($messages){
		/*
		ini_set('display_errors',1);
		ini_set('display_startup_errors',1);
		error_reporting(-1);
		*/
		
		$readMessages = array();	
		$startTime = time();
		while(time() - $startTime < 10) {			
			if(mb_strlen(trim($messages), "utf-8") > 0){
				$sql = "SELECT messageId FROM " . $this->config->messenger->table . " WHERE messageId IN (" . trim($messages) . ") AND isRead = 1";
				$stmt = $this->db->prepare($sql);
				$stmt->execute();
				foreach ($stmt->fetchAll() as $row){
					$readMessages[] = $row['messageId'];
				}
				
				if(count($readMessages)){
					return $readMessages;
				}
			}
			
			usleep(500);
		}
		
		return $readMessages;
	}
	
	
	public function checkNewMessages($options){
		
		$users = array();
        $messagesIds = array();
		
		$sql = "
			SELECT 
				m.messageId, m.fromUser, m.message, m.isRead, m.isDelivered, u.username, u.email, u.gender_id, p.name as photoName FROM " . $this->config->messenger->table . " m
			JOIN 					 
				" . $this->config->users->table . " u 
			ON
				( m.fromUser = u.id)

			LEFT JOIN
			    photo p
			ON
			    ( p.user_id = u.id AND p.is_main = 1 AND p.is_valid = 1)
			WHERE 
				m.toUser = ? AND m.isRead = 0 AND m.isNotified = 0 AND m.date > ?";
		
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(1, $options['userId'], \PDO::PARAM_INT);		
		$stmt->bindParam(2, $options['lastLoginAt']);
		$stmt->execute();
		$result = $stmt->fetchAll();

		foreach ($result as $row){
//            $message = strip_tags(urldecode($row['message']));
//            if(strlen($row['message']) > 75){
//                $message = substr($message, 0, 74) . '...';
//            }
            $message = 'קיבלת הודעה חדשה מ' . $row['username'];

			$photo = (!empty ($row['photoName']))
                ? cloudinary_url($row['photoName'], array(
                    "width" => 150, "height" => 150, "crop" => "thumb", "gravity" => "face"//, "radius" => 20
                ))
                : '/images/no_photo_thumb_' . $row['gender_id'] . '.jpg'
            ;

			$user = array(
				"id" => $row['fromUser'],
				"name" => $row['username'],
				"isDelivered" => $row['isDelivered'],
				"isRead" => $row['isRead'],
                "messageId" => $row['messageId'],
				"message" => $message,
                "photo" => $photo,
			);
			
			if(!in_array($user, $users)){
				$users[] = $user;
			}

            $messagesIds[] = $row['messageId'];
		}



        if(count($messagesIds)){
            $sql = "UPDATE messenger SET isNotified = 1 WHERE messageId IN (" . implode(',', $messagesIds) . ")";
            $this->db->query($sql);
        }





		return $this->response(array("fromUsers" => $users));
	}

	public function checkNewMessagesMobile($options){



		$sql = "
			SELECT
				COUNT(m.messageId) as newMessagesNumber FROM " . $this->config->messenger->table . " m
			JOIN
				" . $this->config->users->table . " u
			ON
				m.fromUser = u.id AND m.fromUser <> ? AND u.is_active = 1 AND u.is_non_locked = 1 AND u.is_frozen = 0
			WHERE
				m.toUser = ? AND m.isRead = 0";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(1, $options['contactId'], \PDO::PARAM_INT);
		$stmt->bindParam(2, $options['userId'], \PDO::PARAM_INT);
		$stmt->execute();
		return $this->response($stmt->fetch());
	}

	public function checkDialogNewMessages($options){
		$result = array();
		$dateTime = array();
		$startTime = time();
		
		while(time() - $startTime < 10) {
			
			$dialog = new Dialog($options);
			$newMessages = $dialog->getNewMessages();
			
			//return $this->response(array("newMessages" => $newMessages, "MinSec" => $dateTime));
			//die();
		
			if(count($newMessages) > 0){
				$allowedToReadMessage = ($dialog->user()->isPaying() || $dialog->contact()->isPaying()) ? true : false;
				
				foreach ($newMessages as $message){
				    if((int)$message['messageId'] > (int)$options['lastMess']) {
                        $this->isNewMessage = true;
                        $messageDateObject = new \DateTime($message['date']);
                        $timestamp = $messageDateObject->getTimestamp();
                        $date = date("m/d/Y", $timestamp);
                        $time = date("H:i", $timestamp);
                        $text = ($message['fromUser'] != $dialog->user()->getId() && !$allowedToReadMessage)
                            ? ''
                            : nl2br(urldecode($message['message']));

                        $messageRes = array(
                            "id" => $message['messageId'],
                            "from" => $dialog->contact()->getId(),
                            "text" => $text,
                            "dateTime" => $date . ' ' . $time,
                            "userImage" => $dialog->contact()->getImage(),
                            "userName" => $dialog->contact()->getNickName(),
                            "allowedToRead" => $allowedToReadMessage,
                        );
                        if (isset($options['isMobile']) and $options['isMobile']) {
                            $messageRes['hasPoints'] = $dialog->user()->hasPoints();
                            $messageRes['paymentText'] = $dialog->config->payment->text;
                            $messageRes['pointsText'] = $dialog->config->points->linkText;
                            $messageRes['payLinkText'] = $dialog->config->payment->linkText;
                        }
                        $result[] = $messageRes;
                    }
				}
			}			
				
			if($this->isNewMessage()){
				$timestamp = time();
				$time = date("i:s", $timestamp);
				$dateTime[] = $time;
		
				foreach($result as $message){
					$dialog->setMessageAsDelivered($message['id']);
				}
				
				//return $this->response(array("newMessages" => $result, "MinSec" => $dateTime));
				//exit(0);
                $readMes = ($dialog->user()->isPaying() || $dialog->contact()->isPaying()) ? false : $dialog->getReadMess();
				return array(
					"newMessages" => $result, 
					"currentUserHasPoints" => $dialog->user()->hasPoints(), 
					"MinSec" => $dateTime,
                    "readMessages" => $readMes
				);
			}
		
			usleep(500);
		}
		 
		$timestamp = time();
		$time = date("i:s", $timestamp);
		$dateTime[] = $time;
		//return $this->response(array("newMessages" => $result, "MinSec" => $dateTime));
		return array("newMessages" => $result, "MinSec" => $dateTime);
	}
	
	public function getNewMessagesNumber($options = false){
		
		$sql = "
			SELECT
				m.messageId FROM " . $this->config->messenger->table . " m	
			JOIN
				users u
			ON
				u.id = m.fromUser 
				AND u.userBlocked = 0 
				AND u.userFrozen = 0 
				AND u.userNotActivated = 0
			WHERE
				m.toUser = ? AND m.isRead = 0";
		
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(1, $options['userId'], \PDO::PARAM_INT);
		$stmt->execute();
		return count($stmt->fetchAll());
	}
	
	
	public function getUsersMessages($page, $perPage, $userId, $conn)
    {
        $offset = ($page - 1) * $perPage;
        $userCond = $userId === null ? '' : 'WHERE m.fromUser = ' . $userId . ' OR m.toUser = ' . $userId;


        $sql = "
            SELECT
              m.messageId,
              m.fromUser,
              m.toUser,
              m.message,
              m.date,
              fromUser.username as fromUsername,
              toUser.username as toUsername
            FROM
              messenger m
            LEFT JOIN
              user fromUser
            ON fromUser.id = m.fromUser

            LEFT JOIN
              user toUser
            ON toUser.id = m.toUser
            " . $userCond . "
            ORDER BY m.messageId DESC
            LIMIT " . $offset . "," . $perPage
        ;

        $stmt = $conn->prepare($sql);
		$stmt->execute();
        $messages = $stmt->fetchAll();

		foreach ($messages as $key => $item){
            $messages[$key]['message'] = nl2br(urldecode($item['message']));
		}
		
		return $messages;
		
	}

    public function getUsersMessagesNumber($userId)
    {
        $userCond = $userId === null ? '' : 'WHERE m.fromUser = ' . $userId . ' OR m.toUser = ' . $userId;

        $sql = "
            SELECT
              COUNT(m.messageId) as number
            FROM
              messenger m
            LEFT JOIN
              user fromUser
            ON fromUser.id = m.fromUser

            LEFT JOIN
              user toUser
            ON toUser.id = m.toUser
            " . $userCond
        ;

        $stmt = $this->db->query($sql);
        $result = $stmt->fetch();
		return $result['number'];

	}
	
	public function useFreePointToReadMessage($messageId, $userId, $returnData = false){
		$user = new User($userId);		
		if($user->hasPoints()){			
			$sql = "SELECT fromUser, message FROM " . $this->config->messenger->table . " WHERE messageId = ?";			
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(1, $messageId, \PDO::PARAM_INT);
			$stmt->execute();
			$row = $stmt->fetch();
			
			$result = array(
				'success' => true,
				'message' => array(
					'from' => $row['fromUser'],
					'text' => nl2br(urldecode($row['message'])),
				)				
			);			
						
			$sql = "UPDATE " . $this->config->messenger->table . " SET isRead = 1, isDelivered = 1 WHERE messageId = '" . $messageId . "'";				
			$stmt = $this->db->query($sql);
			
			$sql = "UPDATE user SET points = points - 1 WHERE id = '" . $userId . "'";
			$stmt = $this->db->query($sql);
			if($returnData){
                $user = new User($userId);
                $result = array(
                    'messageText' => nl2br(urldecode($row['message'])),
                    'userHasFreePoints' => $user->hasPoints()
                );
            }
			return $returnData ? $result : $this->response($result);
		}
				
		return $returnData ? array('success' => false) : $this->response(array('success' => false));
	}

    public function setMessageAsNotified($messageId){
        //$sql = "UPDATE " . $this->config->messenger->table . " SET isRead = 1 WHERE messageId = ? AND toUser = ? AND fromUser = ? AND isRead = 0";
        $sql = "UPDATE " . $this->config->messenger->table . " SET isNotified = 1 WHERE messageId = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(1, $messageId, \PDO::PARAM_INT);
        if($stmt->execute())
            return true;

        return false;
    }
	/*
	public function checkMessagesIfRead($messages){
		ini_set('display_errors',1);
		ini_set('display_startup_errors',1);
		error_reporting(-1);
		$readMessages = array();
		if(mb_strlen(trim($messages), "utf-8") > 0){			
			$sql = "SELECT messageId FROM " . $this->config->messenger->table . " WHERE messageId IN (" . trim($messages) . ") AND isRead = 1";			
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			foreach ($stmt->fetchAll() as $row){
				$readMessages[] = $row['messageId'];
			}
		}
		return $readMessages;
	}
	*/
	
	public function removeMessages($messagesIdsString){
        //$sql = "SELECT MAX(id) FROM "me"

		$sql = "DELETE FROM " . $this->config->messenger->table . " WHERE messageId IN (" . $messagesIdsString . ")";
        echo $sql;
		$this->db->query($sql);
	}



     public function deleteMessage($id , $delete, $user_id, $contact_id) {
         $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

         try {
             $sql = "SELECT * FROM `messengerLastMessages` WHERE `messageId` = " . $id . " OR  `messageId2` = " . $id;
             $stmt = $this->db->query($sql);
             $lastMessage = $stmt->fetch();

             $who_delete = $delete ? 'msgFromDel' : 'msgToDel';
             $sql = "UPDATE " . $this->config->messenger->table . " SET " . $who_delete . " = 1 WHERE messageId = $id";
             $this->db->query($sql);

             if ($lastMessage) {
                 $sql = "SELECT MAX(messageId) FROM " . $this->config->messenger->table .
                        " WHERE (" . $who_delete . " = 0) AND ( (`fromUser` = $user_id AND `toUser` = $contact_id) OR (`fromUser` = $contact_id AND `toUser` = $user_id) )";
                // (msgFromDel = 0) AND (fromUser = 3212 OR toUser = 3212)
                 $stmt = $this->db->query($sql);

                 $lastNotDeletedMessage = $stmt->fetch();
                 $message = $lastMessage['user1'] == $user_id ? 'messageId' : 'messageId2';
                 $messageId = $lastNotDeletedMessage[0] ? $lastNotDeletedMessage[0] : 'null';

                 $sql = "UPDATE `messengerLastMessages` SET " . $message . " = " . $messageId . " WHERE `" . $message . "` = " . $id;
                 $this->db->query($sql);
             }
             return true;
         } catch (Exception $e) {
             return fasle;
         }



     }

     public function setUserDevice($mob_os, $token, $userId) {

         $sql = "SELECT * FROM `users_device` WHERE `$mob_os` = '$token'";
         $res = $this->db->query($sql);
         $res = $res->fetch();
         //var_dump($res);die;

         if(!$res) {
             $sql = "INSERT INTO `users_device`(`user_id`, `$mob_os`) VALUES ($userId,'$token')";
             return $this->db->query($sql) ? true : false;
         } else {
             $sql = "UPDATE `users_device` SET `user_id` = $userId WHERE `$mob_os` = '$token'";
             return $this->db->query($sql) ? true : false;
         }
         return false;
     }

    public function pushNotification2($userDevices, $mess, $image, $user_id){

      // return  $userDevices;
        //  var_dump($userDevices['android'][0]);die;
        // $userAttributes = new userAttributes();
        // $row = $userAttributes->get($this->config->users, array($this->userId), "username");
        // $message = str_replace("{username}", $row['username'], $this->config->notifications->newMessage);
         //var_dump($mess);die;
        $res =[];
        if(isset($userDevices['ios']) && is_array($userDevices['ios'])){
           foreach ($userDevices['ios'] as $device){
                //   $device = DeviceEntityHandler::getInstance('iOS');
                // $device->setProps(array('userId' => $this->chatWith, 'id'=> $deviceId));

             $res[] = $this->iosPush($mess, $device, $image);


           }
         //  return $res;
        }



        if(isset($userDevices['android']) && !empty($userDevices['android'])) {
            foreach ($userDevices['android'] as $token) {
                //return $token;
                //echo $userDevices['android'];
                $data = array(
                    // 'title' => 'A short string describing the purpose of the notification',
                    'message' => $mess,
                    'count' => 5,
                    'sound' => 'dfault',
                    'content-available' => '0',
                    'userFrom' => $user_id,
                    // 'custom_key1' => 'value1',
                    //'custom_key2' => 'value2',
                    'image' => $image,
                    'vibrate' => 1,
                    'notId' => time(),
                    //"userId" => $this->userId,
                    "titleMess" => 'הגיעה הודעה חדשה',
                    // "buttons" => array('ביטול','תצוגה'),
                    //  "userNick" => $row['userNick'],
                    //"msgcnt" => $this->getNewMessCount(true),
                    "onlyInBackgroundMode" => 1,
                );
                // var_dump($userDevices['android'][0]['android']);die;
                $fields = array(
                    'to' => $token,
                    'data' => $data,
                    'priority' => 'high',

                   // 'notification' => $data
                );

                // var_dump($fields['registration_ids']);die;
                $headers = array(
                    'Authorization: key=' . 'AIzaSyAWDA0T0ZtD4VD8c_3gp613Fc-Y_OJkpBI',
                    'Content-Type: application/json'
                );

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
                curl_setopt($ch, CURLOPT_POST, true);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // url_setopt( $ch, CURLOPT_VERBOSE, true );
                // Disabling SSL Certificate support temporarly
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));

                $result = curl_exec($ch);
                if ($result === FALSE) {
                    die('Curl failed: ' . curl_error($ch));
                }
                curl_close($ch);
            }
        }
             // var_dump($result);
         //   echo $token;
          // return $result;
        }


    // Put your device token here (without spaces):

    public function iosPush($mess, $deviceToken, $image) {

        // Put your device token here (without spaces):
        $deviceToken = trim($deviceToken);
        $passphrase = 'interdate';

        $ctx = stream_context_create();

        stream_context_set_option($ctx, 'ssl', 'local_cert', $_SERVER['DOCUMENT_ROOT'] . '/apns-dev.pem');
        stream_context_set_option($ctx, 'ssl', 'passphrase', $passphrase);

        // Open a connection to the APNS server
        $fp = stream_socket_client(
            //'ssl://gateway.push.apple.com:2195', $err,
            'ssl://gateway.sandbox.push.apple.com:2195', $err,
            $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

        if (!$fp){
           // return $errstr;
           exit("Failed to connect: $err $errstr" . PHP_EOL); # 500 error
        }



        $body['aps'] = array(
            'alert' => $mess,
            'sound' => 'default',
            'count' => 1
        );

        $payload = json_encode($body);
        $msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;
        $result = fwrite($fp, $msg, strlen($msg));
        fclose($fp);
      //  return $result;
    }


    public function pushNotification1($mess, $contactId, $user ,$image) {

        $sql = "SELECT * FROM `users_device` WHERE `user_id` = ?";
        $stmt =  $this->db->prepare($sql);
        $stmt->execute([$contactId]);
        $res = $stmt->fetchAll();
        $usersDevices = array();
        foreach ($res as $device) {
            if (isset($device['android']) and !empty($device['android'])){
                $usersDevices['android'][] = $device['android'];
            } elseif (isset($device['ios']) and !empty($device['ios'])) {
                $usersDevices['ios'][] = $device['ios'] ;
            }
        }
     //   return $usersDevices;
      // return $this->pushNotification2($usersDevices, $mess, $image, $user);
    }

//    public function isNotSentToday($user, $contact){
//        $date = new \DateTime('now');
//        $date1 = $date->format("Y-m-d 00:00:00");
//        $date2 = $date->format("Y-m-d 23:59:59");
//        $sql = "SELECT msgId FROM " . $this->config->messenger->table . " WHERE fromUser = ? AND toUser = ? AND date BETWEEN ? AND ?";
//        $stmt = $this->db->prepare($sql);
//        $stmt->bindParam(1, $user);
//        $stmt->bindParam(2, $contact);
//        $stmt->bindParam(3, $date1);
//        $stmt->bindParam(4, $date2);
//        $stmt->execute();
//        return ( count($stmt->fetchAll()) == 1 ) ? true : false;
//    }

}

