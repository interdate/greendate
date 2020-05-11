<?php

namespace AppBundle\Controller\Backend;

use AppBundle\Entity\Payment;
use AppBundle\Entity\PaymentHistory;
use AppBundle\Entity\Photo;
use AppBundle\Entity\Report;
use AppBundle\Entity\User;
use AppBundle\Form\Type\AdminAdvancedSearchType;
use AppBundle\Form\Type\AdminPropertiesType;
use AppBundle\Form\Type\ProfileOneAdminType;
use AppBundle\Form\Type\ProfileOneType;
use AppBundle\Form\Type\ProfileThreeType;
use AppBundle\Form\Type\ProfileTwoType;
use AppBundle\Form\Type\ChangePasswordType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class UsersController extends Controller
{
    private $filters = array(
        'total' => array(
            'title' => 'סה"כ',
            'icon' => 'users',
        ),

        'active_and_not_frozen' => array(
            'title' => 'פעילים',
            'icon' => 'idea',
        ),

        'male' => array(
            'title' => 'גברים',
            'icon' => 'male',
        ),

        'female' => array(
            'title' => 'נשים',
            'icon' => 'female',
        ),

        'with_photos' => array(
            'title' => 'עם תמונות',
            'icon' => 'photo',
        ),

        'frozen' => array(
            'title' => 'מוקפאים',
            'icon' => 'asterisk',
        ),

        'inactive' => array(
            'title' => 'לא פעילים',
            'icon' => 'ban',
        ),

        'flagged' => array(
            'title' => 'מסומנים',
            'icon' => 'flag',
        ),

        'paying' => array(
            'title' => 'משלמים',
            'icon' => 'shekel',
        ),

        'search' => array(
            'title' => 'תוצאות חיפוש',
            'icon' => 'search',
        ),

        'error_paying' => array(
            'title' => 'שגיאה מתשלום',
            'icon' => 'credit card red'
        ),

        'active_paying' => array(
            'title' => 'תשלומים פעילים',
            'icon' => 'credit card'
        ),

        'today_paying' => array(
            'title' => 'תשלומים היום',
            'icon' => 'money bill alternate outline'
        ),
    );


    /**
     * @Route("/admin/users/list/{filter}/{page}", defaults={"page" = 1, "filter" = "total"}, name="admin_users")
     */
    public function indexAction(Request $request, $page, $filter)
    {
        $reportsRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:Report');

        $quickSearchSidebar = $request->request->get('quickSearchSidebar', null);
        $advancedSearch = $request->request->get('advancedSearch', null);
        $report = null;

        if($filter == 'report'){
            $report = $reportsRepo->find($request->request->get('reportId'));
            $data = json_decode($report->getParams(), true);
        }
        else{
            $data = null !== $quickSearchSidebar
                ? $quickSearchSidebar
                : $advancedSearch
            ;
        }

        $data['filter'] = $filter;
        $usersRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:User');
        //var_dump($usersRepo->find(111)->isPaying());die;
        $stat = $usersRepo->getAdminStat();
        $this->bindFiltersWithStat($stat);

        $users = $usersRepo->setAdminMode()->search(
            array(
                'current_user' => $this->getUser(),
                'data' => $data,
                'paginator' => $this->get('knp_paginator'),
                'page' => $page,
                'per_page' => 20,
            )
        );

        $users->setTemplate('backend/pagination.html.twig');

        return $this->render('backend/users/index.html.twig', array(
            'users' => $users,
            'data' => $data,
            'stat' => $stat,
            'reports' => $reportsRepo->findByIsFlagged(true),
            'current_report' => $report,
            'filters' => $this->filters,
            'current_filter_data' => $this->getFilterData($filter, $report),
        ));
    }

    private function bindFiltersWithStat($stat)
    {
        foreach($stat as $key => $val){
            if(isset($this->filters[$key])) {
                $this->filters[$key]['total_number'] = $val;
            }
        }
    }

    private function getFilterData($filter, $report)
    {
        if(null !== $report){
            return array(
                'name' => 'report',
                'title' => $report->getName(),
                'icon' => 'bar chart',
            );
        }

        $filterData = $this->filters[$filter];
        $filterData['name'] = $filter;
        return $filterData;
    }

    /**
     * @Route("/admin/search/advanced", name="admin_search_advanced")
     */
    public function searchAction()
    {
        $form = $this->createForm(new AdminAdvancedSearchType(), new User());
        return $this->render('backend/users/advanced_search.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/admin/user/{id}/{property}/{value}", name="admin_user_active")
     */
    public function setPropertyAction(User $user,$property, $value)
    {
        $em = $this->getDoctrine()->getManager();
        $setter = 'set' . ucfirst($property);
        $user->$setter($value);
        $em->persist($user);
        $em->flush();
        return new Response();
    }

    /**
     * @Route("/admin/user/{id}/delete", name="admin_user_delete")
     */
    public function deleteAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return new Response();
    }

    /**
     * @Route("/admin/users/save/ban/reason", name="admin_users_save_ban_reason")
     */
    public function saveBanReasonAction(Request $request)
    {
        $this->getDoctrine()->getManager()->getRepository('AppBundle:User')->saveBanReason(
            $request->request->get('users'),
            $request->request->get('reason')
        );

        return new Response();
    }

    /**
     * @Route("/admin/users/edit/profile/{id}/{tab}", defaults={"tab" = 1}, name="admin_users_edit_profile")
     */
    public function editProfileAction(Request $request, User $user, $tab)
    {
        $errors = false;
        $edited_form_view = null;

        $form_1 = $this->createForm(new ProfileOneAdminType(), $user);
        $form_2 = $this->createForm(new ProfileTwoType(), $user);
        $form_3 = $this->createForm(new ProfileThreeType(), $user);
        $form_4 = $this->createForm(new AdminPropertiesType(), $user);
        $form_5 = $this->createForm(new ChangePasswordType(), $user);
        $form_5->remove('oldPassword');


        if($request->isMethod('POST')){
			
        	if($tab == 5){
        		$edited_form = $this->createForm($this->getProfileType($tab), $user);
        		$edited_form->remove('oldPassword');
        	}else{
            	$edited_form = $this->createForm($this->getProfileType($tab), $user);
        	}

            $edited_form->handleRequest($request);
            if($edited_form->isSubmitted() && $edited_form->isValid()){
                $zodiacRepo = $this->getDoctrine()->getRepository('AppBundle:Zodiac');
                $user->setZodiac($zodiacRepo->getZodiacByDate($user->getBirthday()));
                if($tab == 5){
                	$encoder = $this->get('security.encoder_factory')->getEncoder($user);
                	$encodedPassword = $encoder->encodePassword($user->getPassword(), null);
                	$user->setPassword($encodedPassword);
                }
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
            }
            else{
                $errors = true;
            }

            $edited_form_view = $edited_form->createView();

        }

        return $this->render('backend/users/edited_profile.html.twig', array(
            'user' => $user,
            'tab' => $tab,
            'edited_form' => $edited_form_view,
            'form_1' => $form_1->createView(),
            'form_2' => $form_2->createView(),
            'form_3' => $form_3->createView(),
            'form_4' => $form_4->createView(),
        	'form_5' => $form_5->createView(),
            'errors' => $errors,
        ));
    }

    /**
     * @Route("/admin/users/view/profile/{id}", name="admin_users_view_profile")
     */
    function viewProfileAction(User $user)
    {
        return $this->render('backend/users/profile.html.twig', array(
            'user' => $user,
        ));
    }

    /**
     * @Route("/admin/users/user/{id}/photos", name="admin_users_user_photos")
     */
    function userPhotosAction(User $user)
    {
        $this->setUpCloudinary();
        $renderedCloudForm = cl_image_upload_tag('image_id');

        return $this->render('backend/users/photos.html.twig', array(
            'user' => $user,
            'renderedCloudForm' => $renderedCloudForm,
        ));
    }

    /**
     * @Route("/admin/users/user/{id}/photos/photo/data", name="admin_users_user_photos_photo_data")
     */
    public function photoDataAction(User $user, Request $request)
    {
        $name = $request->request->get('name');
        $isMain = $request->request->get('mainPhotoAlreadyExists') == 1 ? false : true;

        $photo = new Photo();
        $photo->setUser($user);
        $photo->setName($name);
        $photo->setIsValid(true);
        $photo->setIsMain($isMain);

        $em = $this->getDoctrine()->getManager();
        $em->persist($photo);
        $em->flush();

        return new Response();
    }

    /**
     * @Route("/admin/users/user/photos/{id}/{property}/{value}", name="admin_users_user_photos_property")
     */
    public function setPhotoPropertyAction(Photo $photo, $property, $value)
    {
        $em = $this->getDoctrine()->getManager();
        $setter = 'set' . ucfirst($property);

        if($property == 'isMain'){
            $photos = $photo->getUser()->getPhotos();

            foreach($photos as $userPhoto){
                if($userPhoto->getIsMain()){
                    $userPhoto->setIsMain(false);
                    $em->persist($userPhoto);
                }
            }
        }

        $photo->$setter($value);
        $em->persist($photo);
        $em->flush();

        return new Response();
    }

    /**
     * @Route("/admin/users/user/photos/{id}/delete", name="admin_users_user_photo_delete")
     */
    public function deletePhotoAction(Photo $photo)
    {
        $this->setUpCloudinary();
        \Cloudinary\Uploader::destroy($photo->getName());

        $user = $photo->getUser();
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
     * @Route("/admin/users/user/history/edit", name="admin_users_user_history_edit")
     */
    function userPaymentHistoryEditAction(Request $request){
        $id = (int)$request->get('id', 0);
        $entity = $request->get('entity', null);
        $field = $request->get('field', null);
        $val = $request->get('value', null);
        $entityStr = ($entity == 'payment') ? 'AppBundle:Payment' : 'AppBundle:PaymentHistory';

        if($id > 0){
            $em = $this->getDoctrine()->getManager();
            $repo = $em->getRepository($entityStr)->find($id);
            //$history = $this->getDoctrine()->getRepository('AppBundle:PaymentHistory')->find($id);
            if($repo){
                if($field == 'note') {
                    $repo->setNote($val);
                }
                if($field == 'nextPaymentDate'){
                    $valArr = explode("-", $val);
                    $val = implode("-", array_reverse($valArr));
                    $repo->setNextPaymentDate(new \DateTime($val));
                }
                if($field == 'isActive' and ($val == '1' or $val == '0')){
                    $repo->setIsActive((boolean)$val);
                }
                $em->persist($repo);
                $em->flush();
            }
        }
        return new Response();
        /*$this->view(array(
            'success' => 1,
        ), Response::HTTP_OK);*/
    }

    /**
     * @Route("/admin/users/user/{id}/subscription", name="admin_users_user_subscription")
     */
    function userSubscriptionAction(Request $request, User $user){

        //$interval = new \DateInterval('P1D');
        if(is_object($user->getEndSubscription()) and $user->getEndSubscription()->getTimestamp() > time()){
            $startDateObj = new \DateTime($user->getStartSubscription()->format('d-m-Y'));
           // $startDateObj->add($interval);
            $startDate = $startDateObj->format('d-m-Y');
        }else{
            $startDate = date('d-m-Y');
        }

        $endDate = (is_object($user->getEndSubscription()) and $user->getEndSubscription()->getTimestamp() > time()) ? $user->getEndSubscription()->format('d-m-Y') : date('d-m-Y');

        $form = $this->createFormBuilder()
            ->add('id', 'hidden', array(
                'data' => $user->getId()
            ))
            ->add('points', 'text', array(
                'label' => 'נקודות',
                'data' => $user->getPoints(),
            ))
            ->add('startSubscription', 'text', array(
                'label' => 'תאריך התחלת מנוי',
                'data' => $startDate,
                'required' => false
            ))
            ->add('period', 'choice', array(
                'label' => 'תקופת מנוי',
                'multiple' => false,
                'expanded' => false,
                'choices' => array('0' => 'בחר תקופה','-1' => 'שבועיים', '1' => 'חודש','3' => '3 חודשים', '6' => '6 חודשים', '12' => 'שנה'),
                'data' => '0',
                'required' => false,
            ))
            ->add('endSubscription', 'text', array(
                'label' => 'תאריך סיום מנוי',
                'data' => $endDate,
                'required' => false
            ))
            ->add('transactionId', 'text', array('label' => 'מס\' עסקה','required' => false,))
            ->add('name', 'text', array('label' => 'שם מבצע העסקה','required' => false,))
            ->add('note', 'textarea', array('label' => 'Note','required' => false,))
            ->getForm();
        $form->handleRequest($request);
        //$form = $this->createForm(new SubscriptionType($user, $this->getDoctrine()));
        $save = '0';

        if ($request->isMethod('POST') and $request->get('remove',0) == 0/* and $user->getGender()->getId() == 1 */) {
            if ($form->isSubmitted() && $form->isValid()) {
                // validate subscribe
                $data = $form->getData();
                if($data['startSubscription'] == $data['endSubscription'] and $user->getPoints() == $data['points']){
                    $form->get('endSubscription')->addError(new FormError('Choose Subscription Period'));
                }
                if(!empty($data['transactionId']) or !empty($data['name'])){
                    if(empty($data['transactionId'])){
                        $form->get('transactionId')->addError(new FormError('Input Transaction ID from telepay (recordId)'));
                    }
                    if(empty($data['name'])){
                        $form->get('name')->addError(new FormError('Input Name from telepay'));
                    }
                    if($data['period'] == '0'){
                        $form->get('period')->addError(new FormError('Choose Subscription Period'));
                    }
                }
                if($form->isValid()){
                    $em = $this->getDoctrine()->getManager();
                    $valArr = explode("-", $data['startSubscription']);
                    $data['startSubscription'] = implode("-", array_reverse($valArr));
                    $startDate = new \DateTime($data['startSubscription']);
                    if($user->getStartSubscription() != $startDate){
                        $user->setStartSubscription($startDate);
                    }
                    $valArr = explode("-", $data['endSubscription']);
                    $data['endSubscription'] = implode("-", array_reverse($valArr));
                    $endDate = new \DateTime($data['endSubscription']);
                    if($user->getEndSubscription() != $endDate){
                        $user->setEndSubscription($endDate);
                    }
                    if($user->getPoints() != $data['points']){
                        $user->setPoints($data['points']);
                    }

                    $paymentRepo = $this->getDoctrine()->getRepository('AppBundle:Payment');
                    if(!empty($data['note']) and (empty($data['transactionId']) or empty($data['name']))){
//                        if(empty($data['transactionId'])){
//                            $lastHist = $historyRepo->findOneBy(array(),array('id' => 'desc'));
//                            $data['transactionId'] = 'admin-' . $user->getId() . '-' . $lastHist->getId();
//                        }
//                        if(empty($data['name'])){
//                            $data['name'] = 'admin-' . $user->getId();
//                        }
                    }
                    if(!empty($data['transactionId']) and $paymentRepo->findOneBy(array('transactionId' => $data['transactionId'])) == null){
                        $payment = new Payment();
                        $payment->setUser($user);
                        $payment->setTransactionId(trim($data['transactionId']));
                        $payPeriod = $data['payPeriod'] = $data['period'];

                        if($payPeriod == '1'){
                            $data['amount'] = 85;
                        }elseif ($payPeriod == '3'){
                            $data['amount'] = 199;
                        }elseif ($payPeriod == '6'){
                            $data['amount'] = 370;
                        }elseif ($payPeriod == '12'){
                            $data['amount'] = 670;
                        }else{
                            $data['amount'] = 64;
                        }
                        $data['ip'] = '82.166.213.13';
                        $data['recordId'] = $data['transactionId'];
                        $amount = (int)$data['amount'] . ".00";
                        $payment->setAmount($amount);
                        $payment->setName(urldecode($data['name']));
                        $payment->setFullData($data);

                        if ($payPeriod == '-1') {
                            $period = '2 week';
                        } else {
                            $period = (int)$payPeriod . 'month' . (((int)$payPeriod == 1) ? '' : 's');
                        }
                        $payment->setPayPeriod($period);
                        $em->persist($payment);
                        $em->flush();

                        $userXML = "<?xml version='1.0' encoding='utf-8' ?>" .
                            "<fields>" .
                            "<field>" .
                            "<fieldName>userId</fieldName>" .
                            "<fieldValue>" . $user->getId() . "</fieldValue>"+
                            "</field>" .
                            "<field>" .
                            "<fieldName>firstName</fieldName>" .
                            "<fieldValue>" . $data['name'] . "</fieldValue>" .
                            "</field>" .
                            "</fields>";
                        $soapClient = new SoapClient("https://secure.telepay.co.il/WS2/TokensWS.asmx?WSDL");
                        $ap_param = array(
                            'recordId'     => $data['recordId'],
                            'terminalName' => 'interdate1_term',
                            'clientIp' => $data['ip'],
                            'amount' => $amount,
                            'creditTerms' => 1,
                            'userFieldsXML' => $userXML
                        );

                        // Call RemoteFunction ()
                        $error = 0;
                        $errorObject = $info = array();
                        try {
                            $info = $soapClient->__call("ChargeTokenBasic", array($ap_param));
                        } catch (SoapFault $fault) {
                            $error = 1;
                            $errorObject = (array)$fault;
                            //error
//                    print("
//                        alert('Sorry, blah returned the following ERROR: ".$fault->faultcode."-".$fault->faultstring.". We will now take you back to our home page.');
//                    ");
                        }
                        $date = new \DateTime();
                        $endDate = $date;
                        if($data['payPeriod'] == '-1') {
                            $strPer = 'P14D';
                        }elseif($data['payPeriod'] == '12'){
                            $strPer = 'P1Y';
                        }else{
                            $strPer = 'P' . (int)$data['payPeriod'] . 'M';
                        }
                        $endDate->add(new \DateInterval($strPer));
                        unset($soapClient);
                        $payHistory = new PaymentHistory();
                        $payHistory->setPaymentDate($date);
                        $payHistory->setEndPaymentDate($endDate);
                        $payHistory->setPayment($payment);
                        $fullData = ($error == 0) ? (array)$info : $errorObject;
                        $payHistory->setFullData($fullData);
                        $em->persist($payHistory);
                        $em->flush();
                        $newEndDate = new \DateTime();
                        $nextPayDate = ($error == 0) ? $endDate : $newEndDate->add(new \DateInterval('P1D'));
                        $payment->setNextPaymentDate($nextPayDate);
                        $payment->addPaymentHistory($payHistory);

                        if ($error == 1) {
                            $payment->setError();
                        }
                        $em->persist($payment);
                        $em->flush();
                        $user->addPayment($payment);
                        if ($error == 0) {
                            $user->setStartSubscription($date);
                            $user->setEndSubscription($endDate);
                        }
                    }
                    $em->persist($user);
                    $em->flush();
                    $save = '1';
                }
            }
        //}elseif($request->isMethod('POST') and $user->getGender()->getId() == 2){
          //  $save = '3';
            //$lastHist = $this->getDoctrine()->getRepository('AppBundle:PaymentHistory')->findOneBy(array(),array('id' => 'desc'));
            //var_dump($lastHist->getId());
        }
        $paymentId = $request->get('payment',0);
        if($request->get('remove',0) == 2 and $paymentId > 0){
            $em = $this->getDoctrine()->getManager();
            $payment = $em->getRepository('AppBundle:Payment')->find($paymentId);
            if($payment->getUser()->getId() == $user->getId()) {
                $payment->setIsActive((boolean)$request->get('val'));
            }
            //var_dump($paymentId, $payment->getId());die;
            $em->persist($payment);
            $em->flush();
            $save = '3';
        }
        if($request->get('remove',0) == 1){
            $em = $this->getDoctrine()->getManager();
            $endDate = new \DateTime(date('Y-m-d H:i:s'));
            $endDate->sub(new \DateInterval('P1D'));
            $user->setEndSubscription($endDate);
            $em->persist($user);
            $em->flush();
            $save = '2';
            $form->remove('endSubscription')
                ->remove('startSubscription')
                ->add('endSubscription', 'text', array(
                'label' => 'תאריך סיום מנוי',
                'data' => date('d-m-Y'),
                'required' => false
            ))->add('startSubscription', 'text', array(
                    'label' => 'תאריך התחלת מנוי',
                    'data' => date('d-m-Y'),
                    'required' => false
            ));
        }

        return $this->render('backend/users/subscription.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
            'save' => $save,
        ));
    }

    /**
     * @Route("/admin/users/photos/waiting", name="admin_users_photos_waiting")
     */
    function waitingPhotosAction()
    {
        return $this->render('backend/users/waiting_photos.html.twig', array(
            'photos' => $this->getDoctrine()->getRepository('AppBundle:Photo')->findByIsValid(false),
        ));
    }

    /**
     * @Route("/admin/users/photos/waiting/{id}/approve/{state}", name="admin_users_photos_waiting_approve")
     */
    function approvePhotoAction(Photo $photo, $state)
    {
        $em = $this->getDoctrine()->getManager();

        if($state == 1){
            $photo->setIsValid(true);
            $em->persist($photo);
        }
        else{
            $this->setUpCloudinary();
            \Cloudinary\Uploader::destroy($photo->getName());

            $user = $photo->getUser();
            $wasMainPhoto = $photo->getIsMain();
            $em->remove($photo);

            if($wasMainPhoto){
                $photos = $user->getPhotos();
                if(isset($photos[0])){
                    $photos[0]->setIsMain(true);
                    $em->persist($photos[0]);
                }
            }
        }

        $em->flush();

        return new Response();
    }

    /**
     * @Route("/admin/users/reports/create", name="admin_users_reports_create")
     */
    function createReportAction(Request $request)
    {
        $report = new Report();
        $report->setName($request->request->get('name'))
            ->setIsFlagged($request->request->get('flagged', false))
            ->setParams(json_encode($request->request->get('advancedSearch')))
        ;

        $em = $this->getDoctrine()->getManager();
        $em->persist($report);
        $em->flush();

        return new Response();
    }

    /**
     * @Route("/admin/users/reports", name="admin_users_reports")
     */
    function reportsAction()
    {
        return $this->render('backend/users/reports.html.twig', array(
            'reports' => $this->getDoctrine()->getRepository('AppBundle:Report')->findAll(),
        ));
    }

    /**
     * @Route("/admin/users/reports/{id}/show_on_main_page/{state}", name="admin_users_reports_show_on_main_page")
     */
    function showOnMainPageAction(Report $report, $state)
    {
        $em = $this->getDoctrine()->getManager();
        $report->setIsFlagged($state);
        $em->persist($report);
        $em->flush();
        return new Response();
    }

    /**
     * @Route("/admin/users/reports/{id}/delete", name="admin_users_reports_delete")
     */
    function deleteReportAction(Report $report)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($report);
        $em->flush();
        return new Response();
    }

    /**
     * @Route("/admin/users/export", name="admin_users_export")
     */
    public function exportAction(Request $request)
    {
        $data = $request->request->get('advancedSearch');
        $usersRepo = $this->getDoctrine()->getManager()->getRepository('AppBundle:User');
        $result = $usersRepo->setAdminMode()->setExportMode()->search(
            array(
                'current_user' => $this->getUser(),
                'data' => $data,
            )
        );

        $fileName = $request->request->get('fileName');

        $response = new StreamedResponse();
        $response->setCallback(function () use($fileName, $result) {

            flush();
            $handle = fopen('php://output', 'r+');

            $i = 0;
            foreach ($result as $row) {
                if($i % 20 == 0){
                    fputcsv($handle, array_keys($row));
                }

                $values = array();
                foreach(array_values($row) as $value){
                    if($value instanceof \DateTime){
                        $value = $value->format("Y-m-d H:i:s");
                    }
                    $values[] = $value;
                }

                fputcsv($handle, $values);
                $i++;
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition','attachment; filename="' . $fileName . '.csv"');
        return $response;
    }

    /**
     * @Route("/admin/users/point/{toAll}", name="admin_users_point")
     */
    public function givePointAction($toAll)
    {
        $this->getDoctrine()->getRepository('AppBundle:User')->givePoint($toAll);
        return new Response();
    }

    /**
     * @Route("/admin/users/login/{id}", name="admin_users_login")
     */
    public function loginAction(User $user)
    {
        $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
        $this->get('security.token_storage')->setToken($token);
        return $this->redirect($this->generateUrl('user_homepage'));
    }



    public function getProfileType($tab)
    {

        switch($tab){
            case 1:
                return new ProfileOneAdminType();
                break;

            case 2:
                return new ProfileTwoType();
                break;

            case 3:
                return new ProfileThreeType();
                break;

            case 4:
                return new AdminPropertiesType();
                break;
                
            case 5:
            	return new ChangePasswordType();
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



}
