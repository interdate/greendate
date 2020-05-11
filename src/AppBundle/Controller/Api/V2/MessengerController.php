<?php

namespace AppBundle\Controller\Api\V2;

use AppBundle\Services\Messenger\Chat;
use AppBundle\Services\Messenger\Dialog;

use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;
use AppBundle\Entity\Photo;


session_write_close();

class MessengerController extends FOSRestController
{



    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Set user device token",
     *   parameters = {
     *     {"name"="phone_id", "dataType"="string", "required"=true, "description"="Device Token Id. "}
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function postPhonesAction(Request $request)
    {
        //
        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        //
        $mob_os = '';
        if ($mobileDetector->isAndroidOS()) {
            $mob_os = 'android';
        }
        if ($mobileDetector->isIOS()) {
            $mob_os = 'ios';
        }

        $token = $request->get('phone_id', false);

        $result = array('success' => false);
        if (($mob_os == 'ios' or $mob_os == 'android') and !empty($token)) {

            $user = $this->get('security.token_storage')->getToken()->getUser();

            $userId = $user->getId();
            $messenger = $this->get('messenger');

            $result = array('success' => $messenger->setUserDevice($mob_os, $token, $userId));
            //var_dump($result); die;
        }
        return $this->view($result, Response::HTTP_OK);

    }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Get User Inbox",
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function getInboxAction(Request $request)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();

//        if($user->getId() == '3212') {
//
//          //var_dump($request->headers->get('version'));
//
//
//        }

        $photo = new Photo();
        $photo->setCloudinary();
        $version = $request->headers->get('version');


       //$dialogs = $this->getDoctrine()->getRepository('AppBundle:User')->getDialogs($user);
        $mobileDetector = $this->get('mobile_detect.mobile_detector');

//        $dialogs = ($mobileDetector->isAndroidOS() /*|| ($mobileDetector->isIOS() && !in_array($version, $ios_free_read) )*/) ?
//            $this->getDoctrine()->getRepository('AppBundle:User')->getDialogs($user)
//            :  in_array($version, $ios_free_read) ? $this->getDoctrine()->getRepository('AppBundle:User')->oldGetDialogs($user)
//                :$this->getDoctrine()->getRepository('AppBundle:User')->getDialogs($user) ;
        if($mobileDetector->isAndroidOS()) {
            $dialogs =  $this->getDoctrine()->getRepository('AppBundle:User')->getDialogs($user);
        } else {
            if(in_array($version, array('1.2.0', '1.1.0'))) {
                $dialogs =   $this->getDoctrine()->getRepository('AppBundle:User')->oldGetDialogs($user);
            }  else {
                $dialogs =  $this->getDoctrine()->getRepository('AppBundle:User')->getDialogs($user);
            }
        }

        foreach ($dialogs as $dialog) {
            $dialog['photoName'] = cloudinary_url($dialog['photoName'], array(
                "width" => 200, "height" => 200, "crop" => "fit"
            ));
            $dialog['date'] = str_replace('-', '/', $dialog['date']);
            $newDialog[] = $dialog;
        }

        return $this->view(array(
            'title' => $this->get('translator')->trans('Messages'),
            'dialogs' => $newDialog,
            'texts' => array('no_results' => $this->get('translator')->trans(' אין הודעות')),
        ), Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Get dialog with contact",
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function getChatUseFreePointToReadMessageAction($messageId, Request $request)
    {
        //messageText
        //userHasFreePoints
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $messenger = $this->get('messenger');
        //useFreePointToReadMessage()
        return $this->view(
            $messenger->useFreePointToReadMessage($messageId, $user->getId(), true)
            , Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Get dialog with contact",
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function getDialogAction(User $contact, Request $request)
    {
        $page = $request->get('page', 1);
        $per_page = $request->get('per_page', 30);
        $version = $request->request->get('version');


        $user = $this->get('security.token_storage')->getToken()->getUser();

//        if($user->getId() == 3337) {
//            var_dump($request->headers->all());die;
//        }
        $userId = $user->getId();
        $contactId = $contact->getId();

        $dialog = new Dialog(array(
            'userId' => $userId,
            'contactId' => $contactId,
        ));

        $photo = new Photo();
        $photo->setCloudinary();
        //$dialog['contact']['image'] = cloudinary_url($dialog['contact']['image']);
        //cloudinary_url($dialog->contact->getImage(), array("width" => 50, "height" => 50, "crop" => "fill"));

        $repository = $this->getDoctrine()->getRepository(Photo::class);
        $photo = $repository->findOneBy(array(
            'user' => $contact->getId(),
            'isMain' => 1,
            'isValid' => 1,
        ));


        $repository = $this->getDoctrine()->getRepository(User::class);
        $user = $repository->findOneBy(array(
            'id' => $contact->getId(),
        ));

        if (!$photo) {
            $photo = "";
        } else {
            $photo = cloudinary_url($photo->getName(), array(
                "width" => 100, "height" => 100, "crop" => "thumb", "gravity" => "face"//, "radius" => 20
            ));
        }

//        if ($userId == 3212) {
//            $mobileDetector = $this->get('mobile_detect.mobile_detector');
//            var_dump($mobileDetector->isAndroidOS());die;
//        }

        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        return $this->view(array(
            'dialog' => $dialog,
           // 'history' => $dialog->getHistory($page, $per_page, true),
            'history' => $mobileDetector->isAndroidOS() || ($mobileDetector->isIOS() && !in_array($version, array('1.2.0', '1.0.0', '1.1.0'))) ?
                $dialog->getHistory($page, $per_page, true)
                : $dialog->oldGetHistory(),
            'texts' => array(
                'name' => $user->getUserName(),
                'photo' => $photo,
                'title' => $this->get('translator')->trans('Messages'),
                'a_conversation_with' => $this->get('translator')->trans('שיחה עם'),
            ),
            'allowedToReadMessage' => ($dialog->user->isPaying() || $dialog->contact->isPaying()) ? true : false
            //'contact' => $this->getDoctrine()->getRepository('AppBundle:User')->find($contactId),
        ), Response::HTTP_OK);
    }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Get new messages in active chat",
     *     parameters = {
     *     {"name"="messages", "dataType"="string", "required"= false, "description"="Array of Messages Id's."}
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function getChatsNewMessagesAction(User $contact, Request $request)
    {


        $user = $this->get('security.token_storage')->getToken()->getUser();
//        if ($user->getId() == 3212) {
//            var_dump(123);
//        }
        $userId = $user->getId();
        $contactId = $contact->getId();
        $options['userId'] = $userId;
//        if (!$userId == 3212) {
            $version = $request->request->get('version');
//        }
        $messenger = $this->get('messenger');
        //$result['newMessages'] = array();
        $messages = rtrim($request->get('messages', false), ',');
        $options['messages'] = ($messages) ? implode(',', $messages) : '';
        //var_dump( $options['messages']);
        //return $messenger->response($options);
        //if(!count($result['newMessages'])){
        $options['contactId'] = $contactId;
        $options['lastMess'] = $request->get('lastMess');
        $options['notReadMess'] = $request->get('notReadMess');
        $options['isMobile'] = true;
        //$result = $messenger->checkDialogNewMessages($options);
        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        $result = $mobileDetector->isAndroidOS() || ($mobileDetector->isIOS() && !in_array($version, array('1.2.0', '1.0.0', '1.1.0'))) ?
            $messenger->checkDialogNewMessages($options) : $messenger->oldCheckDialogNewMessages($options);
        //}
       // $this ->postCheckMessagesAction($request);

      //  $lastMess = $request->request->get(lastMess);


        return $messenger->response($result);


    }

    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Check messages",
     *   parameters = {
     *     {"name"="messages", "dataType"="string", "required"=true, "description"="Array of Messages Id's."}
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function postCheckMessagesAction(Request $request)
    {

        $messages = $request->get('messages');
        $messages = implode(',', $messages);
        $messenger = $this->get('messenger');
        //return $messenger->response(array($messages));
        // var_dump(123);die;
        $result['readMessages'] = $messenger->checkMessagesIfReadApi($messages);

        //var_dump($messenger->checkMessagesIfReadApi($messages));die;
        return $this->view($result, Response::HTTP_OK);
    }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Get count of new messages, count of new notifications and new Messages not notified",
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function getNewMessagesAction(Request $request)
    {
        //var_dump(234);die;
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $conn = $this->getDoctrine()->getManager()->getConnection();
        $res = $conn->query("CALL get_new_messages ('"
            . $user->getId() . "', '"
            . $user->getGender()->getId() . "')")
            ->fetch();
        if ($res['newMessagesNumber'] > 0) {
            $res['messages'] = $conn->query("CALL get_new_messages_not_notified ('"
                . $user->getId() . "')")
                ->fetchAll();
            $i = 0;
            $photo = new Photo();
            $photo->setCloudinary();
            foreach ($res['messages'] as $key => $message) {
                $options['userId'] = $res['messages'][$i]['userId'];
                $options['contactId'] = $user->getId();
                $chat = new Chat($options);
                //$res['messages'][$i]['sender_id'] = $user->getId();
                //$res['messages'][$i]['deliver_id'] = $res['messages'][$i]['userId'];
                $res['messages'][$i]['is_not_sent_today'] = $chat->isNotSentToday();
                //$dialog['contact']['image'] = cloudinary_url($dialog['contact']['image']);
                $res['messages'][$i]['mainPhoto'] = cloudinary_url($res['messages'][$i]['mainPhoto'], array("width" => 50, "height" => 50, "crop" => "fill"));
                if (strpos($res['messages'][$i]['mainPhoto'], 'cloudinary') !== false) {
                    $res['messages'][$i]['mainPhoto'] = $res['messages'][$i]['mainPhoto'];
                } else {
                    $id = $user->getGender()->getId() == 1 ? 2 : 1;
                    $res['messages'][$i]['mainPhoto'] = $request->getSchemeAndHttpHost() . '/images/no_photo_' . $id . '.jpg';
                }
                $i++;
            }
            $res['newMessagesText'] = $this->get('translator')->trans('הודעה חדשה!');
        } else {
            $res['messages'] = array();
        }


        return $this->view($res, Response::HTTP_OK);
    }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Send message",
     *   parameters = {
     *     {"name"="message", "dataType"="string", "required"=true, "description"="Message text."}
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function postSendMessageAction(Request $request, User $contact)
    {

        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userId = $user->getId();
        $contactId = $contact->getId();
        $message = trim($request->get('message'));
        $mess = $options['message'] = trim(strip_tags($message));
        $options['message'] = urlencode($message);
        $options['userId'] = $userId;
        $options['contactId'] = $contactId;

        $chat = new Chat($options);


        $chatIsNotActive = $chat->getUsersBlockStatus();
        // $chatIsNotActive = 0;

        if ($chatIsNotActive != '0') {
            $message =
                ($chatIsNotActive == '1')
                    ?
                    $this->get('translator')->trans('משתמש זה נחסם על ידי הנהלת האתר, לא ניתן לשלוח הודעה.')//This message was not sent because this user has been blocked by the administrator.
                    :
                    $this->get('translator')->trans('ההודעה לא נשלחה בגלל שנחסמת על ידי הנהלת האתר');

            return $this->view(array('success' => false, 'chatIsNotActive' => $chatIsNotActive, 'errorMessage' => $message), Response::HTTP_OK);
        }

        if ($chat->isForbidden()) {
            //$this->get('translator')->trans('Message was not sent. You\'re in this user blocked list.')
           // $errMess = $this->get('translator')->trans('הודעה זו לא נשלחה כיוון שמשתמש זה נמצא ברשימת החסומים שלך או שאת/ה נמצא ברשימת החסומים שלו. אם את/ה מעוניין להסיר משתמש זה מרשימת החסומים שלך יש לגשת לניהול רשימת חסומים');


            $errMess = $this->get('translator')->trans('הנך ברשימת החסומים של משתמש זה, לא ניתן לשלוח הודעה.');
//            if($userId == 3212) {
//                $errMess = $request->headers->get('version');
//            }
            return $this->view(array('success' => false, 'chatIsForbidden' => true, 'errorMessage' => $errMess), Response::HTTP_OK);
        }

        if ($chat->contact()->isFrozen()) {
            return $this->view(array('success' => false, 'contactIsFrozen' => true, 'errorMessage' => $this->get('translator')->trans('ההודעה לא נשלחה בגלל שהמשתמש הקפיא את החשבון שלו')), Response::HTTP_OK); //This message was not sent because it user froze the account.
        }

        $settings = $this->getDoctrine()->getRepository('AppBundle:Settings')->find(1);

        if ($chat->isLimit($settings->getSendMessageUsersNumber())) {
            return $this->view(array('success' => false, 'isLimit' => true, 'errorMessage' => $this->get('translator')->trans('הגעת לכמות ההודעות המרבית.')), Response::HTTP_OK);//You have reached the maximum amount of messaging.
        }


        $messageObj = $chat->sendMessage($mess);

        if ($messageObj) {
           // $mobileDetector = $this->get('mobile_detect.mobile_detector');

            /*if($mobileDetector->isAndroidOS()  and $chat->isNotSentToday()){

                $contact = $this->getDoctrine()->getRepository('AppBundle:User')->find($chat->contact()->getId());
                $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($chat->user()->getId());
				
                if($contact->getIsSentEmail()) {

                    $subject = $request->getHost() . ' | ' . $this->get('translator')->trans('הודעה חדשה')
                        . ' | ' . date("d/m/Y");

                    $image = ($user->getMainPhoto() === null) ? $user->getNoPhoto() : $user->getMainPhoto()->getFaceWebPath();

                    $body = '<div dir="rtl">';
                    $body .= $this->get('translator')->trans('A new message is waiting for you') . '<br>';
                    $body .= $this->get('translator')->trans('From:') .' ' . '<strong>' . $user->getUsername() . '</strong><br>';
                    $body .= $this->get('translator')->trans('Age:') .' ' . $user->age() . '<br>';
                    $body .= $this->get('translator')->trans('Area:') .' ' . $user->getZipCode()->getArea()->getRegion()->getName() . '<br>';
                    $body .= '<img src="' . $request->getSchemeAndHttpHost() . $image . '" style="max-width: 300px"/>';
                    $body .= '</div>';

                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    //$headers .= 'From: ' . $settings->getContactEmail() . ' <' . $settings->getContactEmail() .'>' . "\r\n";
                    $headers .= 'From: ' . $settings->getContactFromEmail() . ' <' . $settings->getContactFromEmail() . '>' . "\r\n";
                    mail($contact->getEmail(), $subject, $body, $headers);
                }
                //UNCOMMENT
                if($contact->getIsSentPush()){
                    $messenger = $this->get('messenger');
                    $messenger->pushNotification('קיבלת הודעה חדשה מ' . $user->getUsername(), $contact->getId());
                }
            }*/

            //$contact = $this->getDoctrine()->getRepository('AppBundle:User')->find($chat->contact()->getId());
            //$user = $this->getDoctrine()->getRepository('AppBundle:User')->find($chat->user()->getId());
            //$messenger = $this->get('messenger');
            //$messenger->pushNotification('קיבלת הודעה חדשה מ' . $user->getUsername(), $contact->getId());


            //die(345);
           // if(trim($messageObj['text'])) {
                return $this->view(array(
                    'success' => true,
                    'message' => $messageObj,
                    'allowedToReadMessage' => ($chat->user->isPaying() || $chat->contact->isPaying()) ? true : false
                ), Response::HTTP_OK);
           //}
        }
        //die(345);
        if (!isset($errorMessage))
        return $this->view(array('success' => false, 'errorMessage' => 'ההודעה לא נשלחה, נסה שנית' ), Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Send push",
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */
    public function postSendPushAction(Request $request, User $contact)
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $userId = $user->getId();
        $contactId = $contact->getId();


        $options['userId'] = $userId;
        $options['contactId'] = $contactId;

        $chat = new Chat($options);
        $settings = $this->getDoctrine()->getRepository('AppBundle:Settings')->find(1);

        if ($chat->isNotSentToday()) {
        echo 123;
            if ($contact->getIsSentEmail()) {
                $contact = $this->getDoctrine()->getRepository('AppBundle:User')->find($chat->contact()->getId());
                $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($chat->user()->getId());

                $subject = 'גרינדייט | ' . $this->get('translator')->trans('הודעה חדשה')
                    . ' | ' . date("d/m/Y");

                $image = ($user->getMainPhoto() === null) ? $user->getNoPhoto() : $user->getMainPhoto()->getFaceWebPath();

                $body = '<div dir="rtl">';
                $body .= $this->get('translator')->trans('קיבלת הודעה חדשה') . '<br>';
                $body .= $this->get('translator')->trans(' מ:') . ' ' . '<strong>' . $user->getUsername() . '</strong><br>';
                $body .= $this->get('translator')->trans('גיל:') . ' ' . $user->age() . '<br>';
                $body .= $this->get('translator')->trans('אזור מגורים:') . ' ' . $user->getRegion()->getName() . '<br>';
                if (strpos($image, 'cloudinary') !== false) {
                    $image = $image;
                } else {
                    $image = $request->getSchemeAndHttpHost() . $image;
                }
                $body .= '<img src="' . $image . '" style="max-width: 300px"/>';
                $body .= '</div>';

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: Admin <' . $settings->getContactEmail() . '>' . "\r\n";
                mail($contact->getEmail(), $subject, $body, $headers);
            }
           if ($contact->getIsSentPush()) {
                $messenger = $this->get('messenger');
                $image = ($user->getMainPhoto() === null) ? 'https://www.greendate.co.il' . $user->getNoPhoto()
                    : $user->getMainPhoto()->getFaceWebPath() . '.jpg';

                //return $image;
                $messenger->pushNotification1('קיבלת הודעה חדשה מ' . $user->getUsername(), $contact->getId(), $user->getId(), $image);

           }

        }
    }









    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Set message as read",
     *   parameters = {
     *     {"name"="message_id", "dataType"="integer", "required"=true, "description"="Message id."}
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function postReadMessageAction(Request $request, User $contact)
    {
//        if ($contact->getId() == 3212) {
            //var_dump(123);die;
//        }
        $messageId = $request->get('message_id',false);
        $result = false;
        if($messageId) {

            $user = $this->get('security.token_storage')->getToken()->getUser();
            $userId = $user->getId();
            $contactId = $contact->getId();

            $options['userId'] = $userId;
            $options['contactId'] = $contactId;

            $chat = new Chat($options);

            if(($chat->user()->isPaying() || $chat->contact()->isPaying())) {
                $result = $chat->setMessageAsRead($messageId);
            }
        }
        return $this->view(array('success' => $result), Response::HTTP_OK);
    }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Set message as notified",
     *   parameters = {
     *     {"name"="message_id", "dataType"="integer", "required"=true, "description"="Message id."}
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function notifyMessageAction(Request $request)
    {
        $messageId = $request->get('message_id',false);
        $result = false;
        if($messageId) {
            //$user = $this->get('security.token_storage')->getToken()->getUser();
            //$userId = $user->getId();
            $messenger = $this->get('messenger');
            $result = $messenger->setMessageAsNotified($messageId);
        }
        return $this->view(array('success' => $result), Response::HTTP_OK);
    }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Use free point for read message",
     *   parameters = {
     *     {"name"="message_id", "dataType"="integer", "required"=true, "description"="Message id."}
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function useFreePointToReadMessageAction(Request $request)
    {
        $messageId = $request->get('message_id',false);
        $result = array('success' => false);
        if($messageId) {
            $user = $this->get('security.token_storage')->getToken()->getUser();
            $userId = $user->getId();
            $messenger = $this->get('messenger');
            $result = $messenger->useFreePointToReadMessage($messageId, $userId, false);
        }
        return $this->view($result, Response::HTTP_OK);
    }

    /**
        * @ApiDoc(
        *   resource = true,
        *   description = "Set message as deleted",
        *   parameters = {
        *     {"name"="message_id", "dataType"="integer", "required"=true, "description"="Message id."},
        *     {"name"="delete_from", "dataType"="boolean", "required"=true, "description"="delete from or to"}
        *   },
        *   statusCodes = {
        *     200 = "Returned when successful",
        *     401 = "Returned when bad credentials were sent"
        *   }
        * )
        */
        public  function postDeleteMessageAction(Request $request) {
            $message_id = $request -> get('messageId', false);
            $delete_from = $request -> get('deleteFrom', null);
            $contact_id = $request -> get('contactId', false);
            $user_id = $request -> get('userId', false);
            if ($message_id && $delete_from !== null && $user_id) {
                $messenger = $this->get('messenger');
                $result = $messenger->deleteMessage($message_id, $delete_from, $user_id, $contact_id);
                return $result;
            }
        }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Delete dialog",
     *   parameters = {
     *     {"name"="contact_id", "dataType"="integer", "required"=true, "description"="contact id"},
     *     {"name"="user_id", "dataType"="integer", "required"=true, "description"="user id"}
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */
    public  function postDeleteInboxAction(Request $request) {
        //var_dump($request -> request -> all()); die;
        $user = $request -> get('user_id');
        $contact =$request -> get('contact_id');

        if( $user && $contact ) {
          return $this->getDoctrine()->getRepository('AppBundle:User')->deleteDialog($user, $contact);
        } else {
            return array(
                'deleted' => false
            );
        }
    }
}


