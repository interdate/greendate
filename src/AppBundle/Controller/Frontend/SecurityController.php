<?php

namespace AppBundle\Controller\Frontend;

use AppBundle\Entity\Payment;
use AppBundle\Entity\PaymentHistory;
use AppBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Validator\Constraints;
use function PhotoAlbum\array_to_table;

class SecurityController extends Controller
{

    /**
     * @Route("/login_check", name="login_check")
     */
    public function loginCheckAction()
    {

    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {

    }

    /**
     * @Route("/password", name="password_recovery")
     */
    public function passwordAction(Request $request)
    {
        $success = false;
        
        $form = $this->createFormBuilder()
            ->add('email', 'text', array(
                'label' => 'אימייל:',
                'constraints' => array(
                    new Constraints\NotBlank(),
                    new Constraints\Email(array(
                        'message' => '
                        האימייל
                        "{{ value }}"
                        אינו תקין
                        ',
                        'checkMX' => true
                    ))
                )
            ))
            ->getForm();

        if($request->isMethod('POST')){
            $form->submit($request);
            if($form->isValid() && $form->isSubmitted()){
                $success = false;
                $requestData = $request->get('form');
                $email = $requestData['email'];

                $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneByEmail($email);
                if($user){
                    $em = $this->getDoctrine()->getManager();
                    $pass = substr(sha1(uniqid(mt_rand(), true)), 0 , 7);
                    $encoder = $this->container->get('security.password_encoder');
                    $encoded = $encoder->encodePassword($user, $pass);
                    $user->setPassword($encoded);
                    $em->persist($user);
                    $em->flush();

                    $subject ='greendate.co.il | איפוס סיסמה | ' . date('d/m/Y H:i:s');

                    $text = '
					<html lang="he">
						<head>
							<meta http-equiv="content-type" content="text/html; charset=utf-8">
						</head>
						<body>
		                    <div dir="rtl">
			                    שלום
			                    ' . $user->getUsername() . ',<br />
			                        סיסמה:
			                    ' . $pass . '<br><br>
		
								בכל שאלה או בעיה נשמח לעמוד לרשותך בכתובת: info@greendate.co.il
								<br><br><br>
								
								שלכם,
								<br>
								צוות גרינדייט
								<br>
								www.greendate.co.il
		                    </div>
						</body>
					</html>';
                    
                    $to = array($user->getEmail());
                    if($to[0] == 'talisharon@hotmail.com'){
                    	$to[] = 'pavel@interdate-ltd.co.il';
                    	/*$transport = \Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, "ssl")
                    	->setUsername('pavel@interdate-ltd.co.il')
                    	->setPassword('pavelinter12');
                    	
                    	$mailer = \Swift_Mailer::newInstance($transport);
                    	//$mailer = $this->get('mailer')->setTransport()
                    	
                    	$message = \Swift_Message::newInstance('Test Subject')
                    	->setFrom(array('abc@example.com' => 'ABC'))
                    	->setTo($to)
                    	->setBody('This is a test mail.');
                    	
                    	$result = $mailer->send($message);
                    	*/
                    }else{
                    	/*$headers = "MIME-Version: 1.0" . "\r\n";
                    	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    	$headers .= 'From: greendate.co.il <info@greendate.co.il>' . "\r\n";
                    	$to = $user->getEmail();
                    	if($to == 'talisharon@hotmail.com'){
                    		$to .= ',pavel@interdate-ltd.co.il';
                    	}
                    	$sendMail = mail($to,$subject,$text,$headers);
                    	*/
                    }
                    $message = \Swift_Message::newInstance()
                    ->setSubject('greendate.co.il | איפיס סיסמה |' . date('d/m/Y H:i:s'))
                    ->setFrom('info@greendate.co.il')
                    ->setTo($to)
                    ->setBody(
                    		$text,
                    		'text/html'
                    		)
                    		;
                    
                    $this->get('mailer')->send($message);
                    
                    
                    //require_once 'swift/lib/swift_required.php';
                    
                    
                    
                    
                    
					/*
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: greendate.co.il <info@greendate.co.il>' . "\r\n";
                    $to = $user->getEmail();
                    if($to == 'talisharon@hotmail.com'){
                    	$to .= ',pavel@interdate-ltd.co.il';
                    }
                    $sendMail = mail($to,$subject,$text,$headers);
                    //var_dump($sendMail);die;*/
                    $success = true;


                    /*$message = \Swift_Message::newInstance()
                        ->setSubject('greendate.co.il | איפיס סיסמה |' . date('d/m/Y H:i:s'))
                        ->setFrom('info@greendate.co.il')
                        ->setTo($user->getEmail())
                        ->setBody(
                            $this->renderView(
                                'frontend/emails/password_recovery.html.twig',
                                array(
                                    'username' => $user->getUsername(),
                                    'password' => $pass,
                                )
                            ),
                            'text/html'
                        )
                    ;

                    $this->get('mailer')->send($message);*/



                }else{
                    $form->get('email')->addError(new FormError('האימייל לא קיים'));
                }
            }
        }

        return $this->render('frontend/security/password.html.twig', array(
            'form' => $form->createView(),
            'success' => $success
        ));

    }

    /**
     * @Route("/sign_up", name="sign_up")
     */
    public function indexAction(Request $request)
    {
        /*
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->redirect($this->generateUrl('user_homepage'));
        }
        */

        $errors = false;
        $user = new User();
        $flow = $this->get('SignUpFlow');
        $flow->bind($user);

        $form = $flow->createForm();
        
        
        if($request->isMethod('POST')) {
        	 
        	
            if($flow->isValid($form)) {
                $flow->saveCurrentStepData($form);

                if($flow->nextStep()) {
                    $form = $flow->createForm();
                }
                else{
                	
                	/*
                    $message = \Swift_Message::newInstance()
                        ->setSubject('ברוכים הבאים לאתר גרינדייט GreenDate.co.il!')
                        ->setFrom('info@greendate.co.il')
                        ->setTo($user->getEmail())
                        ->setBody(
                            $this->renderView(
                                'frontend/emails/sign_up.html.twig',
                                array(
                                    'username' => $user->getUsername(),
                                    'email' => $user->getEmail(),
                                    'password' => $user->getPassword(),
                                )
                            ),
                            'text/html'
                        )
                    ;
                    */
                	
                	$text = '
                    <div dir="rtl">
	                    שלום ' . $user->getUsername() . ',<br />
	                    תודה על הרשמתך לאתר גרינדייט, אתר ההכרויות לצמחונים וטבעונים. <br>
						להלן פרטי הכניסה שלך לאתר:<br>
						אימייל: ' . $user->getEmail() . '<br>
	                    סיסמה: ' . $user->getPassword() . '<br><br>
						בכל שאלה או בעיה נשמח לעמוד לרשותך בכתובת: info@greendate.co.il
						<br><br><br>
						שלכם,
						<br>
						צוות גרינדייט
						<br>
						www.greendate.co.il
                    </div>';

                    $rolesRepo = $this->getDoctrine()->getRepository('AppBundle:Role');
                    $role = $rolesRepo->find(2);
                    $user->setRole($role);

                    $encoder = $this->container->get('security.password_encoder');
                    $encoded = $encoder->encodePassword($user, $user->getPassword());
                    $user->setPassword($encoded);

                    $user->setSignUpDate(new \DateTime());
                    $user->setLastActivityAt(new \DateTime());
                    $user->setLastloginAt(new \DateTime());

                    $em = $this->getDoctrine()->getManager();
                    $em->persist($user);
                    $em->flush();

                    $flow->reset();
                    //$this->get('mailer')->send($message);
                    
                    $subject ='ברוכים הבאים לאתר גרינדייט GreenDate.co.il!';                    
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: info@' . $request->getHost() . ' <info@' . $request->getHost() . '>' . "\r\n";
                    mail($user->getEmail(),$subject,$text,$headers);
                    
                    $session = new Session();
                    $session->set('userId', $user->getId());

                    $token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                    $this->get('security.token_storage')->setToken($token);

                    return $this->redirect($this->generateUrl('sign_up_photo'));
                }
            }
            elseif(!$request->request->get('flow_signUp_transition')) {
                $errors = true;
            }
        }

        return $this->render('frontend/security/sign_up/index.html.twig', array(
            'form' => $form->createView(),
            'flow' => $flow,
            'errors' => $errors,
        ));

    }

    /**
     * @Route("/sign_up/photo", name="sign_up_photo")
     */
    public function photoAction()
    {
        $this->setUpCloudinary();
        $renderedCloudForm = cl_image_upload_tag('image_id');

        return $this->render('frontend/security/sign_up/index.html.twig', array(
            'renderedCloudForm' => $renderedCloudForm,
        ));
    }

    /**
     * @Route("/sign_up/photos", name="sign_up_photos")
     */
    public function photosAction()
    {
        $this->setUpCloudinary();
        $renderedCloudForm = cl_image_upload_tag('image_id');

        return $this->render('frontend/security/sign_up/index.html.twig', array(
            'renderedCloudForm' => $renderedCloudForm,
            'photos' => $this->getUser()->getPhotos(),
        ));
    }

    /**
     * @Route("/payment/subscribe", name="payment_subscribe")
     */
    public function paymentSubscribeAction(Request $request)
    {
        //https://www.greendate.co.il/payment/subscribe?formId=5265d2d0-cdc7-e911-b80c-ecebb8951f7e&userId=111&product=64&payPeriod=-1&prc=NjQ%3D&amount=64&orderId=5caa8075-582c-42b1-8ee5-64414cf4a095&last4Digits=2888&recordId=F07552DF-C6DE-E911-B80C-ECEBB8951F7E&payments=0&tempRef=82525109&cardHolderId=032254757&resultRecord=0000XXXXXXXXXXXXXXX288804000511210000006400++++++++0000000040210150+52713433100000000000000000024000314++אמריקן+אקספרס0+++++++++++++++++++&firstName=דניאל+ברוניצקי&phone=052-5567959
        $params = $request->query->all();
        if(!isset($params['recordId']) or !isset($params['userId'])){
            $params = $request->request->all();
        }
        if(isset($params['recordId']) and isset($params['userId'])){
            $userRepo = $this->getDoctrine()->getRepository('AppBundle:User');
            $em = $this->getDoctrine()->getManager();
            $user = $userRepo->find((int)$params['userId']);
            if($user){
                //save telepay data
                $payment = $em->getRepository('AppBundle:Payment')->findOneBy(array('transactionId' => trim($params['recordId']), 'user' => $user));
                if(!$payment) {
                    $params['ip'] = $_SERVER['REMOTE_ADDR'];
                    $payment = new Payment();
                    $payment->setUser($user);
                    $payment->setTransactionId(trim($params['recordId']));
                    $payPeriod = $params['payPeriod'];
                    $amount = (int)$params['amount'] . ".00";
                    $payment->setAmount($amount);
                    $payment->setName(urldecode($params['firstName']));
                    $payment->setFullData($params);

                    if ($payPeriod == '-1') {
                        $period = '2 week';
                    } else {
                        $period = (int)$payPeriod . 'month' . (((int)$payPeriod == 1) ? '' : 's');
                    }
                    $payment->setPayPeriod($period);
                    $payment->setPhone($params['phone']);
                    $date = new \DateTime();
                    if($params['payPeriod'] == '-1') {
                        $strPer = 'P14D';
                    }elseif($params['payPeriod'] == '12'){
                        $strPer = 'P1Y';
                    }else{
                        $strPer = 'P' . (int)$params['payPeriod'] . 'M';
                    }
                    $payment->setNextPaymentDate($date->add(new \DateInterval($strPer)));
                    $em->persist($payment);
                    $em->flush();
                }
                $error = $this->telepayCharge($payment);
                $user = $userRepo->find((int)$params['userId']);
                return $this->render('frontend/message.html.twig', array(
                    'user' => $user,
                    'error' => $error,
                ));
            }
        }

    }


    public function telepayCharge($payment){
        $error = 0;
        $em = $this->getDoctrine()->getManager();

        $date = new \DateTime();
        $from = new \DateTime($date->format("Y-m-d") . " 00:00:00");
        $to = new \DateTime($date->format("Y-m-d") . " 23:59:59");

        $paymentHistories = $em->getRepository('AppBundle:PaymentHistory')->createQueryBuilder('ph')
            ->where('ph.paymentDate BETWEEN :from AND :to')
            ->andWhere('ph.payment = :payment_id')
            ->setParameter('from', $from)
            ->setParameter('to', $to)
            ->setParameter('payment_id', $payment->getId())->getQuery()->getResult();

        if(count($paymentHistories) == 0) {
            $params = $payment->getFullData();
            $user = $payment->getUser();

            $userXML = "<?xml version='1.0' encoding='utf-8' ?>" .
                "<fields>" .
                "<field>" .
                "<fieldName>userId</fieldName>" .
                "<fieldValue>" . $user->getId() . "</fieldValue>" .
                "</field>" .
                "<field>" .
                "<fieldName>firstName</fieldName>" .
                "<fieldValue>" . $params['firstName'] . "</fieldValue>" .
                "</field>" .
                "</fields>";

            if ($params['payPeriod'] == '-1') {
                $prodDesc = 'מנוי דו שבועי';
                $prodCode = 'PP0014D00';
            } elseif ($params['payPeriod'] == '12') {
                $prodDesc = 'מנוי שנתי';
                $prodCode = 'PP001Y000';
            } elseif ($params['payPeriod'] == '6') {
                $prodDesc = 'מנוי חצי שנתי';
                $prodCode = 'PP006M000';
            } elseif ($params['payPeriod'] == '3') {
                $prodDesc = 'מנוי תלת חודשי';
                $prodCode = 'PP003M000';
            } elseif ($params['payPeriod'] == '1') {
                $prodDesc = 'מנוי חודשי';
                $prodCode = 'PP001M000';
            }
            $amount = (int)$payment->getAmount();
            $vat = number_format(($amount / 117) * 17, 2, '.', '');

            $invoceXML = "<?xml version='1.0' encoding='utf-8' ?>" .
                "<invoice>" .
                "<topLogoUrl>https://www.greendate.co.il/images/logo.png</topLogoUrl>" .
                "<supplierNumber>513453340</supplierNumber>" .
                "<supplierName>אינטרדייט בעיימ</supplierName>" .
                "<supplierAddress>המלאכה 6</supplierAddress>" .
                "<supplierCity>לוד</supplierCity>" .
                "<supplierPhone>08-9214729</supplierPhone>" .
                "<supplierEmail>contact@interdate-ltd.co.il</supplierEmail>" .
                "<to>" .
                "<companyName></companyName>" .
                "<contactPerson>" . $params['firstName'] . "</contactPerson>" .
                "<address></address>" .
                "<city></city>" .
                "<zipCode></zipCode>" .
                "<country></country>" .
                "<phone>" . $payment->getPhone() . "</phone>" .
                "<email> </email>" .
                "</to>" .
                "<invoiceLines>" .
                "<line>" .
                "<productCode>" . $prodCode . "</productCode>" .
                "<description>" . $prodDesc . "</description>" .
                "<quantity>1.0</quantity>" .
                "<price>" . ($amount - $vat) . "</price>" .
                "<total>" . ($amount - $vat) . "</total>" .
                "</line>" .
                "</invoiceLines>" .
                "<total>" . ($amount - $vat) . "</total>" .
                "<discount></discount>" .
                "<discountDescription></discountDescription>" .
                "<totalAfterDiscount></totalAfterDiscount >" .
                "<vat>" . $vat . "</vat>" .
                "<grandTotal>" . $amount . "</grandTotal>" .
                "<notes></notes>" .
                "<activeManager></activeManager>" .
                "<bottomLogoUrl>http://www.interdate-ltd.co.il/wp-content/uploads/2018/02/cropped-logo.jpg</bottomLogoUrl>" .
                "</invoice>";

            $soapClient = new \SoapClient("https://secure.telepay.co.il/WS2/TokensWS.asmx?WSDL");
            $ap_param = array(
                'recordId' => $payment->getTransactionId(),
                'terminalName' => 'interdate1_term',
                'clientIp' => $params['ip'],
                'amount' => $payment->getAmount(),
                'creditTerms' => 1,
                'transactionDate_yyyyMMdd' => '',
                'transactionTime_HHmm' => '',
                'uniqueTransactionNumber_SixDigits' => '',
                'authNum' => '',
                'uniqNum' => '',
                'paramJ' => '',
                'userFieldsXML' => $userXML,
                'invoiceXML' => $invoceXML
            );
            /*
             * <recordId>"+tranzilaIndex+"</recordId>"+""+
            "      <terminalName>gobaby</terminalName>"+""+
            "      <clientIp>"+Request.ServerVariables("REMOTE_ADDR")+"</clientIp>"+""+
            "      <amount>"+payNowAmount+"</amount>"+""+
            "      <creditTerms>1</creditTerms>"+""+
            "      <transactionDate_yyyyMMdd></transactionDate_yyyyMMdd>"+""+
            "      <transactionTime_HHmm></transactionTime_HHmm>"+""+
            "      <uniqueTransactionNumber_SixDigits></uniqueTransactionNumber_SixDigits>"+""+
            "      <authNum></authNum>"+""+
            "      <uniqNum></uniqNum>"+""+
            "      <paramJ></paramJ>"+""+
            "      <userFieldsXML>"+Server.HTMLEncode(userXML)+"</userFieldsXML>"+""+
            //"      <invoiceXML>"+Server.HTMLEncode(invoiceXML)+"</invoiceXML>"+""+
            "      <invoiceXML></invoiceXML>"+""+
            */
            // Call RemoteFunction ()

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
            $endDate = new \DateTime();
            if ($params['payPeriod'] == '-1') {
                $strPer = 'P14D';
            } elseif ($params['payPeriod'] == '12') {
                $strPer = 'P1Y';
            } else {
                $strPer = 'P' . (int)$params['payPeriod'] . 'M';
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
            if ($error == 1) {
                $payment->setError();
            }
            //$payment->addPaymentHistory($payHistory);
            $em->persist($payment);
            $em->flush();
            //$user->addPayment($payment);
            if ($error == 0) {
                $user->setStartSubscription($date);
                $user->setEndSubscription($endDate);
                $em->persist($user);
                $em->flush();
            }
        }
        return $error;
    }


    /**
     * @Route("/payment/auto/renewable", name="payment_auto_renewable", defaults={"payment_id" = null})
     * @Route("/payment/renewable/{payment_id}", name="payment_auto_renewable_id", defaults={"payment_id" = null})
     */
    public function paymentAutoRenewableAction(Request $request, $payment_id){
        $em = $this->getDoctrine()->getManager();
        $paymentRepo = $em->getRepository('AppBundle:Payment');
        if($payment_id !== null and (int)$payment_id > 0){
            $payment_id = (int)$payment_id;
            $pay = $paymentRepo->find($payment_id);
            if($pay){
                $this->telepayCharge($pay);
            }
        }else {
            $date = new \DateTime();
            $from = new \DateTime($date->format("Y-m-d") . " 00:00:00");
            $to = new \DateTime($date->format("Y-m-d") . " 23:59:59");

            $qb = $paymentRepo->createQueryBuilder("p");
            $qb->where('p.isActive = 1')
                ->andWhere('p.nextPaymentDate BETWEEN :from AND :to')
                ->setParameter('from', $from)
                ->setParameter('to', $to);
            $payments = $qb->getQuery()->getResult();
            foreach($payments as $payment){
                $this->telepayCharge($payment);
            }
        }
        return $this->render('frontend/message.html.twig', array(
            'error' => 0,
        ));

    }


    public function setUpCloudinary(){
        \Cloudinary::config(array(
            "cloud_name" => "greendate",
            "api_key" => "333193447586872",
            "api_secret" => "rT6Kccy2ZHThaBlFzlOeLKE085o"
        ));
    }
/*
    public function getCurrentUser()
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            return $this->getUser();
        } else {
            $session = new Session();
            //$session->start();
            $userId = $session->get('userId');
            $usersRepo = $this->getDoctrine()->getRepository('AppBundle:User');
            return $usersRepo->find($userId);
        }

        return null;
    }
*/
    








}
