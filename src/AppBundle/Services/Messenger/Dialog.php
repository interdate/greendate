<?php 

namespace AppBundle\Services\Messenger;

class Dialog extends Chat{
	
	
	public function __construct($options){	
		parent::__construct($options);
	}
	
	public function setMessageAsDelivered($messageId){
		$sql = "UPDATE " . $this->config->messenger->table . " SET isDelivered = 1, modified = ? WHERE messageId = ?";
		$stmt = $this->db->prepare($sql);
		$modified = date("Y-m-d h:i:s");
		$stmt->bindParam(1, $modified, \PDO::PARAM_INT);
		$stmt->bindParam(2, $messageId, \PDO::PARAM_INT);
		$stmt->execute();
	}
	
		
	public function getHistory($page = 1, $per_page = 1000, $is_mobile = false){

		$userId = $this->user->getId();
		$contactId = $this->contact->getId();
		$userImage = $this->user->getImage();
		$contactImage = $this->contact->getImage();
		$userNickName = $this->user->getNickName();
		$contactNickName = $this->contact->getNickName();
		$result = array();

		$sql = "SELECT
					fromUser,toUser,message,date,isRead,messageId,isDelivered, msgFromDel, msgToDel
				FROM
					" . $this->config->messenger->table . "
				WHERE
					(toUser = ? AND fromUser = ?  AND msgToDel = 0)
				OR
					(toUser = ? AND fromUser = ? AND msgFromDel = 0)
				ORDER BY 
					messageId DESC 
				LIMIT  " . (($page - 1)*$per_page) . ', ' . $per_page;

        //var_dump($sql);die;
		$stmt = $this->db->prepare($sql);

		$stmt->bindParam(1, $userId, \PDO::PARAM_INT);
		$stmt->bindParam(2, $contactId, \PDO::PARAM_INT);
		$stmt->bindParam(3, $contactId, \PDO::PARAM_INT);
		$stmt->bindParam(4, $userId, \PDO::PARAM_INT);
		$stmt->execute();
       // return $stmt;
		$messages = $stmt->fetchAll();
        //return $messages;
		$messages = array_reverse($messages);
		$allowedToReadMessage = ($this->user->isPaying() || $this->contact->isPaying()) ? true : false;
		
		foreach ($messages as $message){
         //  var_dump($message); die;
			$messageDateObject = new \DateTime($message['date']);
			$timestamp = $messageDateObject->getTimestamp();
			$date = date("d/m/Y", $timestamp);
			$time = date("H:i", $timestamp);			
			$isRead = ($message['isRead'] == 0) ? false : true;			
			$image = ($userId == $message['fromUser']) ? $userImage : $contactImage;
			$username = ($userId == $message['fromUser']) ? $userNickName : $contactNickName;

			if($is_mobile){
				$text = ($message['fromUser'] != $this->user->getId() && !$allowedToReadMessage && $message['isRead'] == 0)
					? ''
					: nl2br(urldecode($message['message']));
			}else {
				$text = ($message['fromUser'] != $this->user->getId() && !$allowedToReadMessage && $message['isRead'] == 0)
					? ($this->user->hasPoints())
						? $this->config->payment->text . ' <a href="%PAYMENT_LINK%">' . $this->config->payment->linkText . '</a> או <a onclick="Messenger.useFreePointToReadMessage(this)">' . $this->config->points->linkText . '</a>'
						: $this->config->payment->text . ' <a href="%PAYMENT_LINK%">' . $this->config->payment->linkText . '</a>'
					: nl2br(urldecode($message['message']));
			}

			$messageRes = array(
				"id" => $message['messageId'],
				"from" => $message['fromUser'],
				"username" => $username,
				"text" => $text,
				"dateTime" => $date . ' ' . $time,
				"userImage" => $image,
				"isRead" => $isRead,
				"isSaved" => true,
				"allowedToRead" => $allowedToReadMessage,
				"msgFromDel" => $message['msgFromDel'],
				"msgToDel" => $message['msgToDel']

			);
			if($is_mobile){
				$messageRes['hasPoints'] = $this->user->hasPoints();
				$messageRes['paymentText'] = $this->config->payment->text;
				$messageRes['payLinkText'] = $this->config->payment->linkText;
				$messageRes['pointsText'] = $this->config->points->linkText;
			}
			$result[] = $messageRes;
			
			if($message['fromUser'] == $contactId and $message['isDelivered'] == '0'){
				$this->setMessageAsDelivered($message['messageId']);   
			}

			if($allowedToReadMessage and $message['fromUser'] == $contactId and $message['isRead'] == '0'){
				$send = $this->setMessageAsRead($message['messageId']);
				if($message['messageId'] == '108288'){
					//var_dump($send);die;
				}
			}
		}
		
		return $result;
	}

	public function getNewMessagesNumber($options = false){
		
		$userId = $this->user->getId();
		$contactId = $this->contact->getId();
		
		$sql = "
			SELECT
				messageId FROM " . $this->config->messenger->table . "
			WHERE
				toUser = ? AND fromUser = ? AND isRead = 0";
	
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(1, $userId, \PDO::PARAM_INT);
		$stmt->bindParam(2, $contactId, \PDO::PARAM_INT);
		$stmt->execute();
		return count($stmt->fetchAll());
	}

	public function getReadMess(){
		$userId = $this->user->getId();
		$contactId = $this->contact->getId();
		$res = array();
		$sql = "
			SELECT
				messageId FROM " . $this->config->messenger->table . "
			WHERE
				((toUser = ? AND fromUser = ?) OR (toUser = ? AND fromUser = ?)) AND isRead = 1";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(1, $userId, \PDO::PARAM_INT);
		$stmt->bindParam(2, $contactId, \PDO::PARAM_INT);
		$stmt->bindParam(3, $contactId, \PDO::PARAM_INT);
		$stmt->bindParam(4, $userId, \PDO::PARAM_INT);
		$stmt->execute();
		foreach ($stmt->fetchAll() as $mess){
			$res[] = $mess['messageId'];
		}
		return $res;
	}
	
}

?>
