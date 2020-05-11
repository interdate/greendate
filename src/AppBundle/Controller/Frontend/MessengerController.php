<?php

namespace AppBundle\Controller\Frontend;

use AppBundle\Services\Messenger\Chat;
use AppBundle\Services\Messenger\Dialog;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

session_write_close();

class MessengerController extends Controller
{
    /**
     * @Route("/user/messenger", name="messenger")
     */
    public function indexAction()
    {
        return $this->render('frontend/user/messenger/index.html.twig', array(
            'dialogs' => $this->getDoctrine()->getRepository('AppBundle:User')->getDialogs($this->getUser()),
        ));
    }

    /**
     * @Route("/user/messenger/dialog/open/userId:{userId}/contactId:{contactId}", name="messenger_dialog_open")
     */
    public function openDialogAction($userId, $contactId)
    {
        if($userId != $this->getUser()->getId()){
            die;
        }

        $dialog = new Dialog(array(
            'userId' => $userId,
            'contactId' => $contactId,
        ));

        return $this->render('frontend/user/messenger/dialog.html.twig', array(
            'dialog' => $dialog,
            'history' => $dialog->getHistory(),
            'contact' => $this->getDoctrine()->getRepository('AppBundle:User')->find($contactId),
        ));
    }

    /**
     * @Route("/messenger/activeChats/newMessages/userId:{userId}/contactId:{contactId}/{checkForDialogAlso}", defaults={"checkForDialogAlso" = false}, name="user_messenger_active_chats_new_messages")
     */
    public function activeChatsNewMessagesAction($userId, $contactId, $checkForDialogAlso)
    {
        $options['userId'] = $userId;
        $messenger = $this->get('messenger');
        //$result = $messenger->checkActiveChatsNewMessages($options);
        $result['newMessages'] = array();

        if(!count($result['newMessages'])){
            if($checkForDialogAlso){
                $options['contactId'] = $contactId;
                $result = $messenger->checkDialogNewMessages($options);
            }
        }
        /*
        $post = $this->getRequest()->request->all();
        $result['readMessages'] = $messenger->checkMessagesIfRead($post['messages']);
        */
        return $messenger->response($result);

    }

    /**
     * @Route("/messenger/newMessages/userId:{userId}", name="user_messenger_new_messages")
     */
    public function newMessagesAction($userId)
    {
        $messenger = $this->get('messenger');
        $options['userId'] = $userId;
        $options['lastLoginAt'] = $this->getDoctrine()
            ->getRepository('AppBundle:User')
            ->find($userId)
            ->getLastloginAt()
            ->format('Y-m-d H:i:s')
        ;

        $this->setUpCloudinary();
        return $messenger->checkNewMessages($options);
    }

    /**
     * @Route("/messenger/newMessagesMobile/{userId}/{contactId}", name="user_messenger_new_messages_mobile")
     */
    public function newMessagesMobileAction($userId, $contactId)
    {
        $messenger = $this->get('messenger');
        $options['userId'] = $userId;
        $options['contactId'] = $contactId;
        return $messenger->checkNewMessagesMobile($options);
    }


    /**
     * @Route("/messenger/message/send/userId:{userId}/contactId:{contactId}", name="user_messenger_message_send")
     */
    public function sendMessageAction(Request $request, $userId, $contactId)
    {
        $message = $request->request->get('message');
        $options['message'] = strip_tags($message);
        $options['message'] = urlencode($message);
        $options['userId'] = $userId;
        $options['contactId'] = $contactId;

        $chat = new Chat($options);

        if($chat->isForbidden()){
            return $chat->response(array('success' => false, 'chatIsForbidden' => true));
        }

        if($chat->contact()->isFrozen()){
            return $chat->response(array('success' => false, 'contactIsFrozen' => true));
        }

        $settings = $this->getDoctrine()->getRepository('AppBundle:Settings')->find(1);

        if($chat->isLimit($settings->getSendMessageUsersNumber())){
            return $chat->response(array('success' => false, 'isLimit' => true));
        }

        $messageObj = $chat->sendMessage();

        if($messageObj){

//            if($chat->isNotSentToday()){
//
//                $contact = $this->getDoctrine()->getRepository('AppBundle:User')->find($chat->contact()->getId());
//                $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($chat->user()->getId());
//                //$settings = $this->getDoctrine()->getRepository('AppBundle:Settings')->find(1);
//                if($contact->getIsSentEmail()) {
//	                $subject = $request->getHost() . ' | ' . 'הודעה חדשה'
//	                    . ' | ' . date("d/m/Y H:i");
//	                ;
//
//	                $this->setUpCloudinary();
//	                $imageName = $user->getMainPhoto() === null ? '' : $user->getMainPhoto()->getName();
//	                $image = (!empty($imageName))
//	                    ?
//	                        cl_image_tag($imageName, array(
//	                            "width" => 150, "height" => 150, "crop" => "thumb", "gravity" => "face", "radius" => 20
//	                        ))
//	                    :
//	                    ''
//	                ;
//
//	                $body = '<div dir="rtl">';
//	                $body .= 'ממתינה לך הודעה חדשה' . '<br>';
//	                $body .= 'מ'  . '<strong>' . $user->getUsername() . '</strong><br>';
//	                $body .= 'גיל: ' . $user->age() . '<br>';
//	                $body .= 'עיר: ' . $user->getCity()->getName() . '<br>';
//	                $body .= $image;
//	                $body .= '</div>';
//
//	                $headers = "MIME-Version: 1.0" . "\r\n";
//	                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//	                //$headers .= 'From: ' . $settings->getContactEmail() . ' <' . $settings->getContactEmail() .'>' . "\r\n";
//	                $headers .= 'From: info@' . $request->getHost() . ' <info@' . $request->getHost() . '>' . "\r\n";
//	                mail($contact->getEmail(), $subject, $body, $headers);
//                }
//                if($contact->getIsSentPush()){
//                	$messenger = $this->get('messenger');
//                	$messenger->pushNotification('קיבלת הודעה חדשה מ' . $user->getUsername(), $contact->getId());
//                }
//            }


            return $chat->response(array('success' => true, 'message' => $messageObj));
        }

        return $chat->response(array('success' => false));
    }

    /**
     * @Route("/messenger/message/push/userId:{userId}/contactId:{contactId}", name="user_messenger_message_send_push")
     */
    public function sendPushAction(Request $request, $userId, $contactId)
    {
        $options['userId'] = $userId;
        $options['contactId'] = $contactId;

        $chat = new Chat($options);

        if($chat->isNotSentToday()){

            $contact = $this->getDoctrine()->getRepository('AppBundle:User')->find($chat->contact()->getId());
            $user = $this->getDoctrine()->getRepository('AppBundle:User')->find($chat->user()->getId());
            if($contact->getIsSentEmail()) {
                $subject = $request->getHost() . ' | ' . 'הודעה חדשה'
                    . ' | ' . date("d/m/Y H:i");
                ;

                $this->setUpCloudinary();
                $imageName = $user->getMainPhoto() === null ? '' : $user->getMainPhoto()->getName();
                $image = (!empty($imageName))
                    ?
                    cl_image_tag($imageName, array(
                        "width" => 150, "height" => 150, "crop" => "thumb", "gravity" => "face", "radius" => 20
                    ))
                    :
                    ''
                ;

                $body = '<div dir="rtl">';
                $body .= 'ממתינה לך הודעה חדשה' . '<br>';
                $body .= 'מ'  . '<strong>' . $user->getUsername() . '</strong><br>';
                $body .= 'גיל: ' . $user->age() . '<br>';
                $body .= 'עיר: ' . $user->getCity()->getName() . '<br>';
                $body .= $image;
                $body .= '</div>';

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: info@' . $request->getHost() . ' <info@' . $request->getHost() . '>' . "\r\n";
                mail($contact->getEmail(), $subject, $body, $headers);
            }
            if($contact->getIsSentPush()){
                $messenger = $this->get('messenger');
                $messenger->pushNotification('קיבלת הודעה חדשה מ' . $user->getUsername(), $contact->getId());
            }
        }

        return $chat->response(array('success' => true, 'push' => 'send'));


    }

    /**
     * @Route("/messenger/checkMessagesIfRead/userId:{userId}", name="user_messenger_check_messages_if_read")
     */
    public function checkMessagesIfReadAction(Request $request, $userId){
        $options['userId'] = $userId;
        $messenger = $this->get('messenger');
        $post = $request->request->all();
        $result['readMessages'] = $messenger->checkMessagesIfRead($post['messages']);
        return $messenger->response($result);
    }

    /**
     * @Route("/messenger/message/read/messageId:{messageId}/userId:{userId}/contactId:{contactId}", name="user_messenger_message_read")
     */
    public function readMessageAction($messageId, $userId, $contactId)
    {
        $options['userId'] = $userId;
        $options['contactId'] = $contactId;

        $chat = new Chat($options);
        $result = $chat->setMessageAsRead($messageId);
        return $chat->response(array('success' => $result));
    }

    /**
     * @Route("/messenger/message/notify/messageId:{messageId}/userId:{userId}", name="user_messenger_message_notify")
     */
    public function notifyMessageAction($messageId, $userId)
    {
        $messenger = $this->get('messenger');
        $result = $messenger->setMessageAsNotified($messageId);
        return $messenger->response(array('success' => $result));
    }


    /**
     * @Route("/messenger/message/messageId:{messageId}/userId:{userId}/useFreePointToRead", name="user_use_free_point_to_read")
     */
    public function useFreePointToReadMessageAction($messageId, $userId)
    {
        $messenger = $this->get('messenger');
        return $messenger->useFreePointToReadMessage($messageId, $userId);
    }

    public function setUpCloudinary()
    {
        \Cloudinary::config(array(
            "cloud_name" => "greendate",
            "api_key" => "333193447586872",
            "api_secret" => "rT6Kccy2ZHThaBlFzlOeLKE085o"
        ));
    }


}
