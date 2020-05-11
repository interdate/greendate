<?php

namespace AppBundle\Controller\Frontend;


use AppBundle\Entity\User;
use AppBundle\Entity\Photo;

use AppBundle\Form\Type\AdvancedSearchType;
use AppBundle\Form\Type\ChangePasswordType;
use AppBundle\Form\Type\ProfileOneType;
use AppBundle\Form\Type\ProfileTwoType;
use AppBundle\Form\Type\ProfileThreeType;
use AppBundle\Form\Type\QuickSearchType;
use AppBundle\Form\Type\ProfileSettingsType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    /**
     * @Route("/user", name="user_homepage")
     */
    public function indexAction(Request $request)
    {
        $this->setUserLoginFrom();
        $this->getUser()->setIp($_SERVER['REMOTE_ADDR']);
        $em = $this->getDoctrine()->getManager();
        $em->persist($this->getUser());
        $em->flush();

        $user = new User();
        $form = $this->createForm(new QuickSearchType(), $user);
        $usersRepo = $this->getDoctrine()->getRepository('AppBundle:User');
        $settings = $this->getDoctrine()->getManager()->getRepository('AppBundle:Settings')->find(1);

        return $this->render('frontend/user/index.html.twig', array(
            'form' => $form->createView(),
            'newUsers' => $usersRepo->getNew(
                array(
                    'considered_as_new_days_number' => $settings->getUserConsideredAsNewAfterDaysNumber(),
                    'per_page' => $settings->getUsersPerPage(),
                    'current_user' => $this->getUser(),
                )
            ),
        ));
    }

    /**
     * @Route("/user/subscription", name="user_payment")
     */
    public function userPaymentAction(Request $request){
        $em = $this->getDoctrine()->getManager();
        $textBefore = $em->getRepository('AppBundle:TextBeforePayment')->findBy(array('isActive' => true),array('order' => 'asc'));
        $paymentSubscriptions = $em->getRepository('AppBundle:PaymentSubscription')->findBy(array('isActive' => true),array('order' => 'asc'));
        $tableTexts = $em->getRepository('AppBundle:TableTextPayment')->findBy(array('isActive' => true),array('order' => 'asc'));
        $textAfter = $em->getRepository('AppBundle:TextAfterPayment')->findBy(array('isActive' => true),array('order' => 'asc'));
        return $this->render('frontend/user/subscription.html.twig', array(
            'textBefore' => $textBefore,
            'payments' => $paymentSubscriptions,
            'tableTexts' => $tableTexts,
            'textAfter' => $textAfter,
        ));
    }
    
    /**
     * @Route("/user/like/{id}", name="user_like", defaults={"id" = null})
     */
    public function usersLikeAction($id)
    {
    	$firstUser = ((int)$id > 0) ? $this->getDoctrine()->getManager()->getRepository('AppBundle:User')->find($id) : false;
    	$users = $this->getDoctrine()->getManager()->getRepository('AppBundle:User')->getUsersForLike($this->getUser(), $firstUser);
    	$users['url'] = $this->generateUrl('user_profile', array("tab" => 4));
    	return new Response(
    			json_encode($users)
    			);
    }

    /**
     * @Route("/user/profile/{tab}", defaults={"tab" = 1}, name="user_profile")
     */
    public function profileAction(Request $request, $tab)
    {
        if($tab == 4){
            $this->setUpCloudinary();
            $renderedCloudForm = cl_image_upload_tag('image_id');

            return $this->render('frontend/user/profile/index.html.twig', array(
                'tab' => $tab,
                'renderedCloudForm' => $renderedCloudForm,
                //'photos' => $this->getUser()->getPhotos(),
            ));
        }


        $user = $this->getUser();
        $form = $this->createForm($this->getProfileType($tab), $user);
        $errors = false;

        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
            }
            else{
                $errors = true;
            }
        }

        return $this->render('frontend/user/profile/index.html.twig', array(
            'tab' => $tab,
            'form' => $form->createView(),
            'errors' => $errors,
        ));
    }
    
    /**
     * @Route("/user/settings", name="user_settings")
     */
    public function settingsAction(Request $request)
    {
    	$user = $this->getUser();
    	$form = $this->createForm(new ProfileSettingsType(), $user);
    	$errors = false;
    	
    	if($request->isMethod('POST')){
    		$form->handleRequest($request);
    		if($form->isSubmitted() && $form->isValid()){
    			$em = $this->getDoctrine()->getManager();
    			$em->persist($user);
    			$em->flush();
    		}
    		else{
    			$errors = true;
    		}
    	}
    	
    	return $this->render('frontend/user/profile/settings.html.twig', array(
    			'form' => $form->createView(),
    			'errors' => $errors,
    	));
    }

    /**
     * @Route("/user/photo/data", name="user_photo_data")
     */
    public function photoDataAction(Request $request)
    {
        $name = $request->request->get('name');
        $isMain = $request->request->get('mainPhotoAlreadyExists') == 1 ? false : true;

        $photo = new Photo();
        $photo->setUser($this->getUser());
        $photo->setName($name);
        $photo->setIsValid(0);
        $photo->setIsMain($isMain);

        $em = $this->getDoctrine()->getManager();
        $em->persist($photo);
        $em->flush();

        return $this->render('frontend/security/empty.html.twig');
    }

    /**
     * @Route("/user/photo/delete/{id}", name="user_photo_delete")
     */
    public function deletePhotoAction(Photo $photo)
    {
        $user = $this->getUser();

        if($user->getId() != $photo->getUser()->getId()){
            throw $this->createAccessDeniedException();
        }

        $this->setUpCloudinary();
        \Cloudinary\Uploader::destroy($photo->getName());

        $wasMainPhoto = $photo->getIsMain();
        $em = $this->getDoctrine()->getManager();
        $em->remove($photo);
        $em->flush();

        if($wasMainPhoto){
            $photos = $user->getPhotos();
            if(isset($photos[0])){
                echo $photos[0]->getId();
            }

        }

        return $this->render('frontend/security/empty.html.twig');
    }

    /**
     * @Route("/user/photo/main/{id}", name="user_set_main_photo")
     */
    public function setMainPhotoAction(Photo $photo)
    {
        $user = $this->getUser();

        if(!$user || $user->getId() != $photo->getUser()->getId()){
            throw $this->createAccessDeniedException();
        }

        $em = $this->getDoctrine()->getManager();
        $photos = $user->getPhotos();

        foreach($photos as $userPhoto){
            if($userPhoto->getIsMain()){
                $userPhoto->setIsMain(false);
                $em->persist($userPhoto);
            }
        }

        $photo->setIsMain(true);
        $em->persist($photo);
        $em->flush();

        return $this->render('frontend/security/empty.html.twig');
    }

    /**
     * @Route("/user/users/online/{page}", defaults={"page" = 1}, name="user_users_online")
     */
    public function usersOnlineAction(Request $request, $page)
    {
        $data = array();
        $advancedSearch = $request->request->get('advancedSearch');
        $data['filter'] = $advancedSearch['filter'];
        $settings = $this->getDoctrine()->getManager()->getRepository('AppBundle:Settings')->find(1);
        $users = $this->getDoctrine()->getManager()->getRepository('AppBundle:User')->getOnline(
            array(
                'current_user' => $this->getUser(),
                'data' => $data,
                'paginator' => $this->get('knp_paginator'),
                'page' => $page,
                'per_page' => $settings->getUsersPerPage(),
                'considered_as_online_minutes_number' => $settings->getUserConsideredAsOnlineAfterLastActivityMinutesNumber(),
            )
        );

        return $this->render('frontend/user/users.html.twig', array(
            'users' => $users,
            'data' => $data,
            'header' => 'חברים אונליין',
        ));
    }

    /**
     * @Route("/user/search/advanced", name="user_search_advanced")
     */
    public function searchAction(Request $request)
    {
        $form = $this->createForm(new AdvancedSearchType(), new User());
        return $this->render('frontend/user/advanced_search.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/user/search/results/{page}", defaults={"page" = 1}, name="user_search_results")
     * @Route("/public/search/results/{page}", defaults={"page" = 1}, name="public_search_results")
     * @Route("/חברים_באתר/{page}", defaults={"page" = 1}, name="users_public_list")
     */
    public function searchResultsAction(Request $request, $page)
    {
        $quickSearchHomePage = $request->request->get('quickSearchHomePage', null);
        $quickSearchSidebar = $request->request->get('quickSearchSidebar', null);
        $quickSearch = $request->request->get('quickSearch', null);
        $advancedSearch = $request->request->get('advancedSearch', null);


        $data = null !== $quickSearch
            ? $quickSearch
            : $quickSearchSidebar
        ;

        if(null === $data){
            $data = $advancedSearch;
        }

        if(null === $data){
            $data = $quickSearchHomePage;
            //print_r($quickSearchHomePage);
        }

        $perPage = 1;
        $data['current_route'] = $request->get('_route');        
        $usersRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:User');
        $settings = $this->getDoctrine()->getManager()->getRepository('AppBundle:Settings')->find(1);
        
        $users = $usersRepo->search(array(
            'current_user' => $this->getUser(),
            'data' => $data,
            'paginator' => $this->get('knp_paginator'),
            'page' => $page,
            'per_page' => $settings->getUsersPerPage(),            
        ));
        //$users = $usersRepo->search($this->getUser(), $data, $this->get('knp_paginator'), $page, $perPage);

        return $this->render('frontend/user/users.html.twig', array(
            'users' => $users,
            'data' => $usersRepo->getData(),
            'header' => 'תוצאות חיפוש'
        ));
    }

    /**
     * @Route("/user/users/{id}", name="view_user")
     */
    public function viewUserAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $user->setViews($user->getViews() + 1);
        $em->persist($user);
        $em->flush();
        $this->createUpdateList('View', $this->getUser(), $user);

        return $this->render('frontend/user/user.html.twig', array(
            'user' => $user,
        ));

    }

    /**
     * @Route("חברים_באתר/פרופיל/{id}", name="users_public_list_user")
     */
    public function publicUserAction(User $user)
    {
        return $this->render('frontend/user/public_user.html.twig', array(
            'user' => $user,
        ));
    }

    /**
     * @Route("/user/notes/{id}", name="user_notes")
     */
    public function saveNoteAction(Request $request, User $member)
    {
        $this->createUpdateList(
            'Note',
            $this->getUser(),
            $member,
            array('text' => $request->request->get('text'))
        );

        return new Response();
    }
    
    /**
     * @Route("/user/lists", name="mobile_user_lists")
     */
    public function listsAction()
    {
    	return $this->render('frontend/user/lists.html.twig');
    }
    
    /**
     * @Route("/user/account", name="mobile_user_account")
     */
    public function accountAction()
    {
    	return $this->render('frontend/user/account.html.twig');
    }

    /**
     * @Route("/user/users/favorite/{id}", name="user_users_favorite")
     */
    public function favoriteAction(Request $request, User $member)
    {
        $this->createUpdateList('Favorite', $this->getUser(), $member);
        return new Response();
    }

    /**
     * @Route("/user/users/black_list/{id}", name="user_users_black_list")
     */
    public function blackListAction(Request $request, User $member)
    {
        $this->createUpdateList('BlackList', $this->getUser(), $member);
        return new Response();
    }

    /**
     * @Route("/user/users/favorite/delete/{id}", name="user_users_favorite_delete")
     */
    public function deleteFavoriteAction(Request $request, User $member)
    {
        $this->deleteFromList('Favorite', $this->getUser(), $member);
        return new Response();
    }

    /**
     * @Route("/user/users/black_list/delete/{id}", name="user_users_black_list_delete")
     */
    public function deleteBlackListAction(Request $request, User $member)
    {
        $this->deleteFromList('BlackList', $this->getUser(), $member);
        return new Response();
    }

    /**
     * @Route("/user/list/favorited/{page}", defaults={"page" = 1}, name="user_list_favorited")
     * @Route("/user/manage/list/favorited/{page}", defaults={"page" = 1}, name="user_manage_list_favorited")
     */
    public function favoritedAction($page)
    {
        return $this->getList(array(
            'header' => 'צרפתי למועדפים',
            'inverse_list' => 'favoritedMe',
            'type' => 'owner',
            'page' => $page,
        ));
    }

    /**
     * @Route("/user/list/favorited_me/{page}", defaults={"page" = 1}, name="user_list_favorited_me")
     */
    public function favoritedMeAction($page)
    {
        return $this->getList(array(
            'header' => 'צרפו אותי למועדפים',
            'inverse_list' => 'favorited',
            'type' => 'member',
            'page' => $page,
        ));
    }

    /**
     * @Route("/user/list/viewed/{page}", defaults={"page" = 1}, name="user_list_viewed")
     */
    public function viewedAction($page)
    {
        return $this->getList(array(
            'header' => 'צפיתי בהם',
            'inverse_list' => 'viewedMe',
            'type' => 'owner',
            'page' => $page,
        ));
    }

    /**
     * @Route("/user/list/viewed_me/{page}", defaults={"page" = 1}, name="user_list_viewed_me")
     */
    public function viewedMeAction($page)
    {
        return $this->getList(array(
            'header' => 'צפו בי',
            'inverse_list' => 'viewed',
            'type' => 'member',
            'page' => $page,
        ));
    }

    /**
     * @Route("/user/list/connected/{page}", defaults={"page" = 1}, name="user_list_connected")
     */
    public function connectedAction($page)
    {
        return $this->getList(array(
            'header' => 'פניתי אליהם',
            'inverse_list' => 'connectedMe',
            'type' => 'owner',
            'page' => $page,
        ));
    }


    /**
     * @Route("/user/list/connectedMe/{page}", defaults={"page" = 1}, name="user_list_connected_me")
     */
    public function connectedMeAction($page)
    {
        return $this->getList(array(
            'header' => 'פנו אלי',
            'inverse_list' => 'connected',
            'type' => 'member',
            'page' => $page,
        ));
    }

    /**
     * @Route("/user/list/black_listed/{page}", defaults={"page" = 1}, name="user_list_black_listed")
     * @Route("/user/manage/list/black_listed/{page}", defaults={"page" = 1}, name="user_manage_list_black_listed")
     */
    public function blackListedAction($page)
    {
        return $this->getList(array(
            'header' => 'חסומים',
            'inverse_list' => 'blackListedMe',
            'type' => 'owner',
            'page' => $page,
        ));
    }

    /**
     * @Route("/user/freeze_account", name="user_freeze_account")
     */
    public function freezeAccountAction(Request $request)
    {
        if($request->isMethod('POST')){
            $this->getUser()->setIsFrozen(true);
            $this->getUser()->setFreezeReason($request->request->get('freeze_account_reason', null));
            $em = $this->getDoctrine()->getManager();
            $em->persist($this->getUser());
            $em->flush();
            return $this->redirectToRoute('logout');
        }

        return $this->render('frontend/user/freeze.html.twig');
    }

    /**
     * @Route("/user/report/abuse/{id}", name="user_report_abuse")
     */
    public function reportAbuseAction(Request $request, User $member)
    {
        //$subject = "Greendate | Desktop | Report Abuse | Username: " . $member->getUsername();

    	$user = $this->get('security.token_storage')->getToken()->getUser();
        
        $subject = 'גרינדייט | דיווח על כרטיס לא תקין |#'.$member->getID();
         
        $text = $request->get('text', false);
         
        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        if($mobileDetector->isMobile()){
        	$platform = 'Mobile';
        }else {
        	$platform = 'Desktop';
        }
         
        $body = '<div dir="rtl">';
        $body .= '
			שם משתמש: ' . $member->getUsername() . '<br />
			מספר משתמש: ' . $member->getId() . '<br>
			טקסט: ' . $text . '<br /><br />
			משתמש מדווח: ' . $user->getUsername() . '(#' . $user->getId() . ') <br>
			נשלח מ: ' .$platform;
        $body .= '</div>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: ' . $this->getUser()->getEmail() . ' <' . $this->getUser()->getEmail() . '>' . "\r\n";

        $settings = $this->getDoctrine()->getRepository('AppBundle:Settings')->find(1);

        mail($settings->getReportEmail(),$subject,$text,$headers);
        //mail('albert@interdate-ltd.co.il',$subject,$body,$headers);
        return new Response();
    }

    /**
     * @Route("/user/password", name="user_change_password")
     */
    public function changePasswordAction(Request $request)
    {
        $changed = false;
        $user = $this->getUser();
        $form = $this->createForm(new ChangePasswordType(), $user);

        if($request->isMethod('POST')){
            $post = $request->request->all();
            $originalEncodedPassword = $user->getPassword();
            $encoder = $this->get('security.encoder_factory')->getEncoder($user);

            $validOldPassword = $encoder->isPasswordValid(
                $originalEncodedPassword, // the encoded password
                $post['changePassword']['oldPassword'],  // the submitted password
                null
            );

            if($validOldPassword){
                $form->handleRequest($request);
                if($form->isValid() && $form->isSubmitted()){
                    $encodedPassword = $encoder->encodePassword($user->getPassword(), null);
                    $user->setPassword($encodedPassword);

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();
                    $changed = true;
                }

            }
            else{
                $form->get('oldPassword')->addError(new FormError('סיסמה ישנה אינה תקינה'));
            }
        }

        return $this->render('frontend/user/password.html.twig', array(
            'form' => $form->createView(),
            'changed' => $changed,
        ));
    }

    public function getList($settings)
    //public function getList($inverse_list, $header, $page, $perPage)
    {
        $settings['current_user'] = $this->getUser();
        $settings['paginator'] = $this->get('knp_paginator');
        $settings['per_page'] = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Settings')
            ->find(1)
            ->getUsersPerPage()
        ;

        $request = Request::createFromGlobals();
        $data = array();
        $advancedSearch = $request->request->get('advancedSearch');
        $data['filter'] = $advancedSearch['filter'];
        $settings['request_data'] = $data;

        $users = $this->getDoctrine()->getManager()->getRepository('AppBundle:User')->getList($settings);

        return $this->render('frontend/user/users.html.twig', array(
            'users' => $users,
            'header' => $settings['header'],
            'data' => $data,
        ));
    }

    public function getProfileType($tab)
    {

        switch($tab){
            case 1:
                return new ProfileOneType();
                break;

            case 2:
                return new ProfileTwoType();
                break;

            case 3:
                return new ProfileThreeType();
                break;
        }

    }

    public function setUpCloudinary()
    {
        \Cloudinary::config(array(
            "cloud_name" => "greendate",
            "api_key" => "333193447586872",
            "api_secret" => "rT6Kccy2ZHThaBlFzlOeLKE085o"
        ));
    }

    public function createUpdateList($entityName, $owner, $member, $fields = array())
    {
        if($owner->getId() == $member->getId()){
            return;
        }

        $repo = $this->getDoctrine()->getRepository('AppBundle:' . $entityName);
        $entity = $repo->findOneBy(array(
            'owner' => $owner,
            'member' => $member
        ));

        if(null === $entity){
            $className = 'AppBundle\Entity\\' . $entityName;
            $entity = new $className();
            $entity->setOwner($owner);
            $entity->setMember($member);
        }
        elseif(count($fields) == 0){
            return;
        }


        foreach($fields as $key => $value){
            $method = 'set' . ucfirst($key);
            $entity->$method($value);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();
    }

    public function deleteFromList($entityName, $owner, $member)
    {
        $repo = $this->getDoctrine()->getRepository('AppBundle:' . $entityName);
        $entity = $repo->findOneBy(array(
            'owner' => $owner,
            'member' => $member
        ));

        if(null !== $entity){
            $em = $this->getDoctrine()->getManager();
            $em->remove($entity);
            $em->flush();
        }
    }




    function setUserLoginFrom()
    {
        $loginFromRepo = $this->getDoctrine()->getRepository('AppBundle:LoginFrom');

        if($this->isMobile()){
            if($this->isIOS()){
                $this->getUser()->setLoginFrom($loginFromRepo->find(3));
            }
            elseif($this->isAndroid()){
                $this->getUser()->setLoginFrom($loginFromRepo->find(4));
            }
            else{
                $this->getUser()->setLoginFrom($loginFromRepo->find(2));
            }
        }
        else{
            $this->getUser()->setLoginFrom($loginFromRepo->find(1));
        }
    }

    public function isIOS(){
        return (preg_match('/(iphone|ipad|ipaq|ipod)/i', $_SERVER['HTTP_USER_AGENT']))
            ? true
            : false
            ;
    }

    public function isAndroid(){
        return (preg_match('/(android)/i', $_SERVER['HTTP_USER_AGENT']))
            ? true
            : false
            ;
    }

    public function isMobile(){
        return (preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipad|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|playbook|sagem|sharp|sie-|silk|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT']))
            ? true
            : false
            ;
    }



}
