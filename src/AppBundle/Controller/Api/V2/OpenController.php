<?php
namespace AppBundle\Controller\Api\V2;

use AppBundle\Entity\Page;
use AppBundle\Entity\User;
use AppBundle\Form\Type\ContactType;
use AppBundle\Form\Type\SignUpApiType;
use AppBundle\Form\Type\SignUpOneType;
use AppBundle\Form\Type\SignUpApiOneType;
use AppBundle\Form\Type\SignUpThreeType;
use AppBundle\Form\Type\SignUpTwoType;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Constraints;


#use Symfony\Component\BrowserKit\Request;

class OpenController extends FOSRestController
{


    /**
     * @ApiDoc(
     *   description = "Get page",
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */
    public function getPageAction(Page $page)
    {
        //var_dump(123);die;
        return $this->view(array(
            'page' => array(
                'title' => $page->getName(),
                'content' => $page->getContent(),
            ),
        ), Response::HTTP_OK);
    }


    /**
     * @ApiDoc(
     *   description = "Get FAQ page",
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     * @param Request $request
     * @return \FOS\RestBundle\View\View
     */

    public function getFaqAction(Request $request)
    {
       // var_dump(123);die;
        $cats = $this->getDoctrine()->getManager()->getRepository('AppBundle:FaqCategory')->findByIsActive(true);
        $seo = $this->getDoctrine()->getRepository('AppBundle:Seo')->findOneByPage('faq');
        $categories = array();
        foreach ($cats as $cat) {
            $category = array('name' => $cat->getName(), 'faq' => array());
            foreach ($cat->getFaq() as $faq) {
                if ($faq->getIsActive()) {
                    $category['faq'][] = array(
                        "q" => $faq->getName(),
                        "a" => $faq->getContent()
                    );
                }
            }
            $categories[] = $category;
        }/*
        {% for category in categories %}
        {% set i = loop.index + 1 %}
        <div class="faq_inner">
                    <div class="faqin_title"><h4>{{ category.name }}</h4></div>
                    <div class="faq_text">
                        <ul>
                            {% for faq in category.faq %}
                                {% if faq.isActive %}
                                    <li>
                                        <div class="faq_quest faq_quest{{ i }}">{{ faq.name }}</div>
                                        <div class="faq_ans faq_ans{{ i }}">
                                            <span>{{ faq.content }}</span>
                                        </div>
                                    </li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            {% endfor %}
*/
        return $this->view(array(
            'page' => array(
                'title' => $seo->getTitle(),
                'description' => $seo->getDescription()
            ),
            'content' => $categories,
        ), Response::HTTP_OK);
    }


    /**
     * @ApiDoc(
     *   description = "Get sign up Form",
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     * @param Request $request
     * @return \FOS\RestBundle\View\View
     */

    public function getSignUpAction(Request $request)
    {
        $user = new User();

        $form = $this->createForm(new SignUpOneType(), $user);
        $formTrans = $this->transformForm($form);
        $formTrans['step'] = 1;
        return $this->view(array(
            'form' => $formTrans,
        ), Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *   description = "Create user",
     *   parameters={
     *      {"name"="form", "dataType"="string", "required"=false, "description"="parametrs"}
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     * @param Request $request
     * @return \FOS\RestBundle\View\View
     */
    public function postSignUpAction(Request $request){
/*       //111
        $userRepo = $this->getDoctrine()->getRepository('AppBundle:User');
        $curentUser = $userRepo->find(111);




        $qb = $userRepo->createQueryBuilder('u');
        $qb->Where("(u.latitude IS NOT NULL AND u.longitude IS NOT NULL)");
        //$qb->AndWhere("get_distance(u.latitude,u.longitude," . $curentUser->getLatitude() . "," . $curentUser->getLongitude() . ") > 0");
        //$qb->orderBy("get_distance( u.latitude, u.longitude, " . $curentUser->getLatitude() . ", " . $curentUser->getLongitude() . " ) ");
        $qb->addSelect("get_distance(u.latitude,u.longitude," . $curentUser->getLatitude() . "," . $curentUser->getLongitude() . ") as HIDDEN distance")
           ->orderBy('distance');

        $res = $qb->getQuery()->getResult();
        var_dump(count($res));die;
*/
        $postAll = $request->request->all();
//        $post3 = $request -> request -> get('signUpTwo',false);
//        var_dump($post3);die;
        $errors = false;
        $user = new User();
        $flow = $this->get('SignUpFlow');
        //$flow->disableToken();
        $flow->bind($user);
        $form = $flow->createForm();

        if($request->isMethod('POST')) {
            //$form->bind($postAll);
            //var_dump($postAll);die;
            //var_dump($postAll);die;
            $firtPost = $postAll['sign_up_one'];//$request->request->get('signUpOne', false);
            if($firtPost){
                if(empty($firtPost['agree'])) {
                    $form->get('agree')->addError(new FormError($this->get('translator')->trans('נא לאשר תנאי שימוש באתר')));
                    $errors = true;
                }
                if(empty($firtPost['username'])) {
                    $form->get('username')->addError(new FormError($this->get('translator')->trans('נא להזין שם משתמש')));
                    $errors = true;
                }
                if(empty($firtPost['email']['first'])) {
                    $form->get('email')->addError(new FormError($this->get('translator')->trans('נא להזין כתובת דוא״ל')));
                    $errors = true;
                }
                if(empty($firtPost['password']['first'])) {
                    $form->get('password')->addError(new FormError($this->get('translator')->trans('נא להזין סיסמה')));
                    $errors = true;
                }
                if(empty($firtPost['gender'])) {
                    $form->get('gender')->addError(new FormError($this->get('translator')->trans('נא לבחור מין')));
                    $errors = true;
                }
                if(empty($firtPost['birthday']['day']) || empty($firtPost['birthday']['month']) ||  empty($firtPost['birthday']['year']) ) {
                    $form->get('birthday')->addError(new FormError($this->get('translator')->trans('נא לבחור תאריך יום הולדת')));
                    $errors = true;
                }

                $request->request->set('signUpOne', $firtPost);

            }

            $postKey = 'sign_up_one';
            $post3 = $firtPost;
            if(!$post3 and $postAll['flow_signUp_step'] == 2) {
                $postKey = 'sign_up_two';
                $post3 = $firtPost[$postKey];//$request -> request -> get('signUpTwo',false);
                //var_dump($post3,$flow->getFormData());die;
                if($post3 and is_object($flow->getFormData()->getGender()) and $flow->getFormData()->getGender()->getId() == 1){
                    /* foreach (array('status','netWorth','income') as $fieldName){
                         if(empty($post3[$fieldName])){
                             $form->get($fieldName)->addError(new FormError($this->get('translator')->trans('This value should not be blank')));
                             $errors = true;
                         }
                     }*/
                }
                $request->request->set('signUpTwo', $post3);
            }


            if(!$post3) {
                $postKey = 'sign_up_two';
                $post3 = $request->request->get('sign_up_two', false);
                if($post3){

                    if(empty($post3['about'])){
                        $form->get('about')->addError(new FormError($this->get('translator')->trans('Min 10 letters in About Me')));
                        $errors = true;
                    }
                    if(empty($post3['looking'])){
                        $form->get('looking')->addError(new FormError($this->get('translator')->trans('Min 10 letters in What I\'m Looking For')));
                        $errors = true;
                    }
                    //hobbies
                    if(count((array)$post3['hobbies']) == 0){
                        $form->get('hobbies')->addError(new FormError($this->get('translator')->trans('Please choose Hobbies')));
                        $errors = true;
                    }
                }
            }
            if($post3) {
                $userRepo = $this->getDoctrine()->getRepository('AppBundle:User');
                $post3 = $userRepo->removeWordsBlocked($post3,array('username','occupation','about','looking'));
                $request->request->set($postKey, $post3);
                $request->request->set('signUpTwo', $post3);
            }

            //var_dump($form->getErrors());die;


           // var_dump($post3);die;
            if(!$errors and $flow->isValid($form)) {
                //var_dump(123); die;

                $flow->saveCurrentStepData($form);

                if($flow->nextStep()) {
                    $form = $flow->createForm();
                }
                else{

                    $settings = $this->getDoctrine()->getManager()->getRepository('AppBundle:Settings')->find(1);

                    $text = '
                    <div dir="rtl">' .
                        $this->get('translator')->trans('שלום') . ' ' . $user->getUsername() . ',<br />' .
                        $this->get('translator')->trans('תודה על הרשמתך לאתר גרינדייט, אתר ההכרויות לצמחונים וטבעונים.
להלן פרטי הכניסה שלך לאתר: <br> אימייל:') . ' ' . $user->getEmail() . '<br>' .
                        $this->get('translator')->trans('סיסמה:') . ' <input style="direction:ltr;width:100px" type="text" value="' . $user->getPassword() . '"/><br><br>' .
                        $this->get('translator')->trans('בכל שאלה או בעיה נשמח לעמוד לרשותך בכתובת:') . ' ' . $settings->getContactEmail() . '
						<br><br><br>' .
                        $this->get('translator')->trans('שלכם, <br> צוות גרינדייט') .
                        '<br>
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
                    $user->setIsActive(true);
                    $user->setIsFrozen(0);

                    $em = $this->getDoctrine()->getManager();
                    $user->setZodiac($this->getDoctrine()->getManager()->getRepository('AppBundle:Zodiac')->getZodiacByDate($user->getBirthday()));
                    $em->persist($user);

                    $em->flush();

                    $flow->reset();

                    $subject = $this->get('translator')->trans('ברוכים הבאים לאתר גרינדייט GreenDate.co.il!‏');
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: Admin <info@greendate.co.il>' . "\r\n";
                    mail($user->getEmail(),$subject,$text,$headers);

                    $session = new Session();
                    $session->set('userId', $user->getId());

                    //$token = new UsernamePasswordToken($user, null, 'main', $user->getRoles());
                    //$this->get('security.token_storage')->setToken($token);

                    //$request->set('getUser', $user);

                    //return $this->view('test', Response::HTTP_OK);



                    $res = array(
                        'status' => 'no_photo',
                        'photos' => array(
                            array(
                                'face' => $user->getNoPhoto(),
                                'url' => $user->getNoPhoto()
                            )
                        ),
                        'photo' => $user->getNoPhoto(),
                        'texts' => array(
                            'approved' => $this->get('translator')->trans('Approved'),
                            'status' => $this->get('translator')->trans('Status'),
                            'delete' => $this->get('translator')->trans('Delete'),
                            'cancel' => $this->get('translator')->trans('Cancel'),
                            'waiting_for_approval' => $this->get('translator')->trans('Waiting for approval'),
                            'set_as_main_photo' => $this->get('translator')->trans('Set as Main Photo'),
                            'add_photo' => $this->get('translator')->trans('Add Photo'),
                            'choose_from_camera' => $this->get('translator')->trans('Choose from Camera'),
                            'choose_from_gallery' => $this->get('translator')->trans('Choose from Gallery'),
                            'register_end_button' => $this->get('translator')->trans('סיום'),
                            /*'description' => array(
                                'text1' => $this->get('translator')->trans('Adding a photo to your profile boosts your chances of meeting new people times 20!<br>We strongly encourage you post a number of them.<br>*New photos awaiting admin’s approval.<br><br>Please notice these guidelines:<br><ul><li>Photos must be of yourself, and you must be recognizable in the photo.</li><li>Photos must not contain nudity or sexual content.</li></ul><br><br>For more information check out our'),
                                'text2' => '/open_api/pages/6',
                                'text3' => $this->get('translator')->trans('Photos Policy'),
                                'text4' => $this->get('translator')->trans('page.<br>Having trouble uploading a photo? Send the photo to info@nyrichdate.com along with your nickname or the email you registered with, and we\'ll upload it to your profile.<br>'),
                            )*/
                            'description' => $this->get('translator')->trans('
                                    Adding a photo to your profile boosts your chances of meeting new people times 20!<br>
                                    We strongly encourage you post a number of them.<br>
                                    *New photos awaiting admin’s approval.<br>
                                    <br>
                                    Please notice these guidelines:
                                    <ul>
                                        <li>Photos must be of yourself, and you must be recognizable in the photo.</li>
                                        <li>Photos must not contain nudity or sexual content.</li>
                                     </ul><br>
                                     For more information check out our <a click="/open_api/pages/6">Photos Policy</a> page.<br>
                                     Having trouble uploading a photo? Send the photo to <a href="mailto:info@nyrichdate.com" >info@nyrichdate.com</a> along with your nickname or the email you registered with, and we\'ll upload it to your profile .<br >
                                '),
                        )
                    );

                    $res['id'] = $user->getId();
                    return $this->view($res, Response::HTTP_OK);
                }
            }
            // return $this->view($form->getErrorsAsString(), Response::HTTP_OK);
        }

        return $this->view(array('user' => array(
            'form' => $this->transformForm($form, $flow->getFormData()),
            //'flow' => $flow->getFormData(),
            'errors' => $form->getErrors(),
        )), Response::HTTP_OK);
    }


    /**
     * @ApiDoc(
     *   description = "Create user",
     *   parameters={
     *      {"name"="form", "dataType"="string", "required"=false, "description"="parametrs"}
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     * @param Request $request
     * @return \FOS\RestBundle\View\View
     */
    public function postSignUpNewAction(Request $request){
        $postAll = $request->request->all();
        $errors = false;

        $user = new User();
        $signUp = new SignUpApiOneType();

        $step = 1;
        $post = (isset($postAll['signUpOne'])) ? $postAll['signUpOne'] : array();
        $options = array(
            'validation_groups' => array('sign_up_one'),
            'csrf_protection' => false
        );
        if(isset($postAll['signUpTwo']) and isset($postAll['signUpTwo']['region'])){
            $signUp = new SignUpTwoType();
            $step = 2;
            $post = $postAll['signUpTwo'];
            $options['validation_groups'] = array('sign_up_two');
        }
        if (isset($postAll['signUpTwo']) and isset($postAll['signUpTwo']['about'])){
            $signUp = new SignUpThreeType();
            $step = 3;
            $post = $postAll['signUpTwo'];
            $options['validation_groups'] = array('sign_up_three');
        }
       // var_dump($signUp);
        //$contact->disableToken();
        $form = $this->createForm($signUp, $user, $options);
        // var_dump(234);
        // $form = $request->request->get('contact');
        if ($request->isMethod('Post')) {

            // remove words of blocked
            if(count($post) > 0) {
                $userRepo = $this->getDoctrine()->getRepository('AppBundle:User');
                if ($step == 1) {
                    $post = $userRepo->removeWordsBlocked($post, array('username'));
                    $request->request->set('signUpOne', $post);
                }
                if ($step == 3) {
                    $post = $userRepo->removeWordsBlocked($post, array('about', 'looking'));
                    $request->request->set('signUpTwo', $post);
                }
            }

            $form->handleRequest($request);

            switch ($step) {
                case 1:
                    //var_dump($post);
                    if (empty($post['agree'])) {
                        $form->get('agree')->addError(new FormError($this->get('translator')->trans('נא לאשר תנאי שימוש באתר')));
                        $errors = true;
                    }
                    if (empty($post['agreeSendEmails'])) {
                        $form->get('agreeSendEmails')->addError(new FormError($this->get('translator')->trans('נא לאשר שליחת חומר פרסומי')));
                        $errors = true;
                    }
                    if (empty($post['username'])) {
                        $form->get('username')->addError(new FormError($this->get('translator')->trans('נא להזין שם משתמש')));
                        $errors = true;
                    }
                    if (empty($post['email'])) {
                        $form->get('email')->addError(new FormError($this->get('translator')->trans('נא להזין אימייל')));
                        $errors = true;
                    }
                    if (empty($post['password']['first'])) {
                        $form->get('password')->get('first')->addError(new FormError($this->get('translator')->trans('נא להזין סיסמה')));
                        $errors = true;
                    }
                    if (empty($post['password']['second'])) {
                        $form->get('password')->get('second')->addError(new FormError($this->get('translator')->trans('נא להזין סיסמה בשנית')));
                        $errors = true;
                    } else if($post['password']['first'] !== $post['password']['second']) {
                        $form->get('password')->get('second')->addError(new FormError($this->get('translator')->trans('סיסמאות לא תואמות')));
                        $errors = true;
                    }
                    if (empty($post['gender'])) {
                        $form->get('gender')->addError(new FormError($this->get('translator')->trans('נא לבחור מין')));
                        $errors = true;
                    }
                    if (empty($post['birthday']['day']) || empty($post['birthday']['month']) || empty($post['birthday']['year'])) {
                        $form->get('birthday')->addError(new FormError($this->get('translator')->trans('נא לבחור תאריך לידה')));
                        $errors = true;
                    }
                    break;
                case 2:
                    if (empty($post['city'])) {
                        $form->get('city')->addError(new FormError($this->get('translator')->trans('נא לבחור עיר')));
                        $errors = true;
                    }
                    if (empty($post['education'])) {
                        $form->get('education')->addError(new FormError($this->get('translator')->trans('נא לבחור את ההשכלה שלך')));
                        $errors = true;
                    }
                    if (empty($post['occupation'])) {
                        $form->get('occupation')->addError(new FormError($this->get('translator')->trans('נא לבחור את תחום עיסוקך')));
                        $errors = true;
                    }
                    if (empty($post['region'])) {
                        $form->get('region')->addError(new FormError($this->get('translator')->trans('נא לבחור את אזור המגורים שלך')));
                        $errors = true;
                    }
                    if (empty($post['relationshipStatus'])) {
                        $form->get('relationshipStatus')->addError(new FormError($this->get('translator')->trans('נא לבחור את מצבך המשפחתי')));
                        $errors = true;
                    }
                    if (empty($post['religion'])) {
                        $form->get('religion')->addError(new FormError($this->get('translator')->trans('נא לבחור דת')));
                        $errors = true;
                    }
//                    if (empty($post['religionAffinity'])) {
//                        $form->get('religionAffinity')->addError(new FormError($this->get('translator')->trans('נא לבחור זיקה לדת')));
//                        $errors = true;
//                    }
                    if (empty($post['sexOrientation'])) {
                        $form->get('sexOrientation')->addError(new FormError($this->get('translator')->trans('נא לבחור העדפה מינית')));
                        $errors = true;
                    }
                    break;
                case 3:
                    if(empty(($post['about'])) ) {
                        $form->get('about')->addError(new FormError($this->get('translator')->trans('שדה ״קצת עלי״ חייב להכיל לפחות 10 תווים')));
                        $errors = true;
                    }
                    if (empty($post['animals'])) {
                        $form->get('animals')->addError(new FormError($this->get('translator')->trans('נא למלא את שדה "בעלי חיים"')));
                        $errors = true;
                    }
                    if (empty($post['body'])) {
                        $form->get('body')->addError(new FormError($this->get('translator')->trans('נא לבחור מבנה גוף')));
                        $errors = true;
                    }
                    if (empty($post['children'])) {
                        $form->get('children')->addError(new FormError($this->get('translator')->trans('נא למלא את שדה "ילדים"')));
                        $errors = true;
                    }
                    if (empty($post['drinking'])) {
                        $form->get('drinking')->addError(new FormError($this->get('translator')->trans('נא לבחור הרגלי שתייה')));
                        $errors = true;
                    }
                    if (empty($post['eyes'])) {
                        $form->get('eyes')->addError(new FormError($this->get('translator')->trans('נא לבחור צבע עיניים')));
                        $errors = true;
                    }
                    if (empty($post['green'])) {
                        $form->get('green')->addError(new FormError($this->get('translator')->trans('נא למלא את שדה "כמה ירוק אני"')));
                        $errors = true;
                    }
                    if (empty($post['hair'])) {
                        $form->get('hair')->addError(new FormError($this->get('translator')->trans('נא לבחור צבע שיער')));
                        $errors = true;
                    }

                    if (empty($post['looking'])) {
                        $form->get('looking')->addError(new FormError($this->get('translator')->trans('שדה ״מה אני מחפש/ת״ חייב להכיל לפחות 10 תווים')));
                        $errors = true;
                    }
                    if (empty($post['smoking'])) {
                        $form->get('smoking')->addError(new FormError($this->get('translator')->trans('נא לבחור הרגלי עישון')));
                        $errors = true;
                    }
                    if (empty($post['sport'])) {
                        $form->get('sport')->addError(new FormError($this->get('translator')->trans('נא לבחור הרגלי ספורט')));
                        $errors = true;
                    }
                    if (empty($post['height'])) {
                        $form->get('height')->addError(new FormError($this->get('translator')->trans('נא לבחור גובה')));
                        $errors = true;
                    }

                    if (empty($post['type'])) {
                        $form->get('type')->addError(new FormError($this->get('translator')->trans('נא למלא את שדה ״אני״')));
                        $errors = true;
                    }
                    if (empty($post['politicalAffiliation'])) {
                        $form->get('politicalAffiliation')->addError(new FormError($this->get('translator')->trans('נא לבחור השקפה פוליטית')));
                        $errors = true;
                    }
//                    if (empty($post['nutrition'])) {
//                        $form->get('nutrition')->addError(new FormError($this->get('translator')->trans('נא לבחור הרגליי תזונה')));
//                        $errors = true;
//                    }
            }
            if (!$errors and $form->isValid()) {
                if($step != 3){
                    if($step == 1) {
                        $signUp = new SignUpTwoType();
                        $step = 2;
                        $options['validation_groups'] = array('sign_up_two');
                    }elseif ($step == 2){
                        $signUp = new SignUpThreeType();
                        $step = 3;
                        $options['validation_groups'] = array('sign_up_three');
                    }
                    //$contact->disableToken();

                    $form = $this->createForm($signUp, $user, $options);
                }else{
                    $user = new User();
                    $sign = new SignUpApiType();
                    $form = $this->createForm($sign, $user, array('csrf_protection' => false));
                    $form->handleRequest($request);


                    $settings = $this->getDoctrine()->getManager()->getRepository('AppBundle:Settings')->find(1);

                    $text = '
                    <div dir="rtl">' .
                        $this->get('translator')->trans('שלום') . ' ' . $user->getUsername() . ',<br />' .
                        $this->get('translator')->trans('תודה על הרשמתך לאתר גרינדייט, אתר ההכרויות לצמחונים וטבעונים.
להלן פרטי הכניסה שלך לאתר: <br> אימייל:') . ' ' . $postAll['user']['email'] . '<br>' .
                        $this->get('translator')->trans('סיסמה:') . ' <input style="direction:ltr;width:100px" type="text" value="' . $postAll['user']['password'] . '"/><br><br>' .
                        $this->get('translator')->trans('בכל שאלה או בעיה נשמח לעמוד לרשותך בכתובת:') . ' ' . $settings->getContactEmail() . '
						<br><br><br>' .
                        $this->get('translator')->trans('שלכם, <br> צוות גרינדייט') .
                        '<br>
							www.greendate.co.il
                    </div>';


                    $rolesRepo = $this->getDoctrine()->getRepository('AppBundle:Role');
                    $role = $rolesRepo->find(2);
                    $user->setRole($role);

                    $encoder = $this->container->get('security.password_encoder');

                    $encoded = $encoder->encodePassword($user, $postAll['user']['password']);
                   // return var_dump($postAll);
                    $user->setPassword($encoded);

                    $user->setSignUpDate(new \DateTime());
                    $user->setLastActivityAt(new \DateTime());
                    $user->setLastloginAt(new \DateTime());
                    $user->setIsActive(true);
                    $user->setIsFrozen(0);
                    $user->setEmail($postAll['user']['email']);
                    $user->setHeight($postAll['user']['height']);
                    //facebook_id
                    if(isset($postAll['user']['facebook_id']) and !empty($postAll['user']['facebook_id'])) {
                        $user->setFacebook($postAll['user']['facebook_id']);
                    }
                //    var_dump($user->getAnimals());
//                    var_dump($user->getFacebook());

                    $em = $this->getDoctrine()->getManager();
                    $user->setZodiac($this->getDoctrine()->getManager()->getRepository('AppBundle:Zodiac')->getZodiacByDate($user->getBirthday()));
                    $em->persist($user);

                    $em->flush();



                    $subject = $this->get('translator')->trans('ברוכים הבאים לאתר גרינדייט GreenDate.co.il!‏');
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: Admin <info@greendate.co.il>' . "\r\n";
                    mail($user->getEmail(),$subject,$text,$headers);

                    $session = new Session();
                    $session->set('userId', $user->getId());


                    $res = array(
                        'status' => 'no_photo',
                        'photos' => array(
                            array(
                                'face' => $user->getNoPhoto(),
                                'url' => $user->getNoPhoto()
                            )
                        ),
                        'photo' => $user->getNoPhoto(),
                        'texts' => array(
                            'approved' => $this->get('translator')->trans('Approved'),
                            'status' => $this->get('translator')->trans('Status'),
                            'delete' => $this->get('translator')->trans('Delete'),
                            'cancel' => $this->get('translator')->trans('Cancel'),
                            'waiting_for_approval' => $this->get('translator')->trans('Waiting for approval'),
                            'set_as_main_photo' => $this->get('translator')->trans('Set as Main Photo'),
                            'add_photo' => $this->get('translator')->trans('Add Photo'),
                            'choose_from_camera' => $this->get('translator')->trans('Choose from Camera'),
                            'choose_from_gallery' => $this->get('translator')->trans('Choose from Gallery'),
                            'register_end_button' => $this->get('translator')->trans('סיום'),
                            'description' => $this->get('translator')->trans('
                                    Adding a photo to your profile boosts your chances of meeting new people times 20!<br>
                                    We strongly encourage you post a number of them.<br>
                                    *New photos awaiting admin’s approval.<br>
                                    <br>
                                    Please notice these guidelines:
                                    <ul>
                                        <li>Photos must be of yourself, and you must be recognizable in the photo.</li>
                                        <li>Photos must not contain nudity or sexual content.</li>
                                     </ul><br>
                                     For more information check out our <a click="/open_api/pages/6">Photos Policy</a> page.<br>
                                     Having trouble uploading a photo? Send the photo to <a href="mailto:info@nyrichdate.com" >info@nyrichdate.com</a> along with your nickname or the email you registered with, and we\'ll upload it to your profile .<br >
                                '),
                        )
                    );

                    $res['id'] = $user->getId();
                    return $this->view($res, Response::HTTP_OK);
                }
            }else{
//                return $this->view(array(
//                    'data' => $post,
//                    'errors' => $form->getErrors(),
//                ), Response::HTTP_OK);
            }
            // var_dump($postAll);die;
        }

        $trans = $this->transformForm($form, $user);
        $trans['step'] = $step;


        return $this->view(array('user' => array(
            'form' => $trans,
            'data' => $post,
            'errors' => $form->getErrors(),
        )), Response::HTTP_OK);


    }



    /**
     * @ApiDoc(
     *   description = "helper for sign up",
     *   parameters={
     *      {"name"="form", "dataType"="string", "required"=false, "description"="Parametrs"},
     *   },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     * @param Request $request
     * @return \FOS\RestBundle\View\View
     */
    public function postSignUpHelperAction(Request $request)
    {
        if($request->request->get('sign_up_one', false)){
            $user = new User();
            $form = $this->createForm(SignUpOneType::class, $user);
            $form->handleRequest($request);

            return $this->view(array(
                'form' => $this->transformForm($form),
            ), Response::HTTP_OK);
        }
    }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Save Locations",
     *   parameters = {
     *  },
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     * @param Request $request
     * @return \FOS\RestBundle\View\View
     */

    public function postLocationSaveAction(Request $request)
    {
        $id = $request->get('id', null);
        $latitude = $request->get('latitude', null);
        $longitude = $request->get('longitude', null);

        if ($latitude != null and $longitude != null and $id != null) {
            $user = $this->getDoctrine()->getManager()->getRepository('AppBundle:User')->find($id);
            if ($user) {
                $user->setLatitude($latitude);
                $user->setLongitude($longitude);
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
            }
        }
        return $this->view(1, Response::HTTP_OK);
    }

    /**
     * @param $user
     */
    public function setUserZipCodeFromSession($user)
    {
        $session = new Session();
        $sessionData = $session->all();
        //$session->clear();

        if (isset($sessionData['craue_form_flow'])) {

            foreach ($sessionData['craue_form_flow']['signUp'] as $item) {

                if (array_key_exists('1', $item['data'])) {
                    $array = $item['data'][1];
                    if (isset($array['zipCode'])) {
                        $user->setZipCode($this->getDoctrine()->getRepository('AppBundle:ZipCode')->find($array['zipCode']));
                    }
                }
            }
        }
    }

    /**
     * @param $request
     * @param $user
     * @return bool
     */
    public function setZipCode($request, $user)
    {
        $post = $request->request->get('sign_up_one');
        if (isset($post['zipCode']) and (int)$post['zipCode'] > 0) {
            $user->setZipCode($this->getDoctrine()->getRepository('AppBundle:ZipCode')->find($post['zipCode']));
            if (!is_object($user->getZipCode())) {
                return false;
            }
            return true;
        } //return false;
        else {
            $this->setUserZipCodeFromSession($user);
        }
    }

    /**
     * @ApiDoc(
     *  description="Send contact form",
     *  input="AppBundle\Form\Type\ContactType",
     *  statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     * @param Request $request
     * @return \FOS\RestBundle\View\View
     */
    public function postContactAction(Request $request)
    {
         // var_dump($request -> request -> all()); die;

        $id = $request->get('id');


        $sent = false;
        $user = new User();

        $contact = new ContactType();
        $contact->disableToken();
        $form = $this->createForm($contact, $user);

      // $form = $request->request->get('contact');
        if ($request->isMethod('Post')) {

            // var_dump($request);
           // var_dump($form -> getData());
            $form->handleRequest($request);
           // var_dump($form -> getData());
           //var_dump($form->get('_token')->getData(); die;
          /*  print_r($request->request->all());
            echo $form->isValid() ? 1 : 0;

            die;*/
          //$form->handleRequest($form);

            if ($form->isValid() && $form->isSubmitted()) {

                $email = ($form->get('email')->getData()) ? $form->get('email')->getData() : $form->getData()->getEmail();


                if ($user = $this->getDoctrine()->getManager()->getRepository('AppBundle:User')->find($email)) {
                    $userId = $user->getId();
                    $email = $user->getEmail();
                } else {
                    $userId = 0;
                }

                $subject = "גרינדייט | צור קשר | " . $userId . "# |" . $form->get('subject')->getData();

                $mobileDetector = $this->get('mobile_detect.mobile_detector');

                if ($mobileDetector->isAndroidOS()) {
                    $platform = 'Android App';
                }
                if ($mobileDetector->isIOS()) {
                    $platform = 'IOS App';
                }

                $text = $form->get('text')->getData();


                $body = '<div dir="rtl">';
                $body .= $text . '<br>';
                $body .= 'נשלח מ: ' . $platform;
                $body .= '</div>';

                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: ' . $email . ' <' . $email . '>' . "\r\n";
                $settings = $this->getDoctrine()->getRepository('AppBundle:Settings')->find(1);
                mail($settings->getContactEmail(), $subject, $body, $headers);
                // mail('albert@interdate-ltd.co.il',$subject,$body,$headers);
                $sent = true;
                $success = $this->get('translator')->trans('תודה! הודעה נשלחה בהצלחה.');
            }
        }
        $res = array(
            //'form' => $this->transformForm($form),
            'mail' => $email,
            'errors' => $form->getErrors(),
            'send' => $sent,
        );
        if ($sent) {
            $res['success'] = $success;
        }

        return $this->view($res, Response::HTTP_OK);
    }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Get banner",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */
    public function getBannerAction(Request $request)
    {
        return $this->view(array('banner' => array(
            //'link' =>'https://www.greendate.co.il/עמודים/ספידייט',
            //'img' => 'https://www.greendate.co.il/images/banners/small580-75.gif',
            'link' => '',
            'img' => ''
        )), Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *  description="Get contact form",
     *  output="AppBundle\Form\Type\ContactType",
     *  parameters={
     *      {"name"="id", "dataType"="integer", "required"=false, "description"="String for translate"}
     *  },
     *  statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     * @param Request $request
     * @return \FOS\RestBundle\View\View
     */
    public function getContactAction(Request $request)
    {
        $id = $request->get('id');

        $user = (int)$id == 0 ? $user = new User() : $this->getDoctrine()->getManager()->getRepository('AppBundle:User')->find($id);
        $form = $this->createForm(new ContactType(), $user);

        return $this->view(array(
            'form' => $this->transformForm($form),
            'userEmail' => $user->getEmail(),
        ), Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Login User",
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     400 = "Bad Request.",
     *     403 = "Returned when bad credentials were sent."
     *   }
     * )
     * @param Request $request
     * @return \FOS\RestBundle\View\View
     */

    public function postLoginAction(Request $request)
    {

        $headers = $request->headers->all();
        $username = $headers['username'];
        $password = $headers['password'][0];
        $facebook = $request->request->get('facebook_id', false);

        $username = urldecode((string)$username[0]);

        $em = $this->getDoctrine()->getManager();
        $user = false;
        if(!empty($username) and !empty($password)) {
            $userCheck = $em->getRepository('AppBundle:User')->loadUserByUsernameApi($username);

            if ($userCheck) {

                $encoder_service = $this->get('security.encoder_factory');
                $encoder = $encoder_service->getEncoder($userCheck);
                //$encoded_pass = $encoder->encodePassword($password, $userCheck->getSalt());
                $validOldPassword = $encoder->isPasswordValid(
                    $userCheck->getPassword(), // the encoded password
                    $password,  // the submitted password
                    null
                );

                if ($validOldPassword or $userCheck->getFacebook() == $password) {
                    $user = $userCheck;
                }
            }
        }else{
            $user = $em->getRepository('AppBundle:User')->findOneByFacebook($facebook);
        }

        if ($user) {
            //$user = $this->get('security.token_storage')->getToken()->getUser();
            $user->setIp($_SERVER['REMOTE_ADDR']);
            $user->setIsFrozen(0);
           // $user->setLastRealActivityAt(new Date());
            if($facebook and !empty($facebook)){
                $user->setFacebook($facebook);
            }
            //$user->setLastloginAt(new DateTime());
            $loginFromRepo = $em->getRepository('AppBundle:LoginFrom');
            $mobileDetector = $this->get('mobile_detect.mobile_detector');
            if ($mobileDetector->isAndroidOS()) {
                $user->setLoginFrom($loginFromRepo->find(6));
            }
            if ($mobileDetector->isIOS()) {
                $user->setLoginFrom($loginFromRepo->find(5));
            }

            $em->persist($user);
            $em->flush();

            $status = $this->getUserStatus($user);
            if ($user->getIsActive()) {
                $response = array(
                    'status' => $status,
                    'photo' => (is_object($user->getMainPhoto())) ? $user->getMainPhoto()->getFaceWebPath() : $user->getNoPhoto(),
                    'id' => $user->getId(),
                    'test' => $username,
                    'username' => $user->getUsername(),
                    'texts' => array(
                        'photoMessage' => $this->get('translator')->trans('You need to upload at least one photo'),
                        'notActiveMessage' => $this->get('translator')->trans('משתמש זה נחסם על ידי הנהלת האתר')
                    )
                );
            } else {
                $response = array(
                    'msg' => 'Error',
                    'is_not_active' => true,
                    'user' => $username,
                );
            }
            if(empty($username) or empty($password)) {
                $response['user'] = array(
                    'login' => 1,
                    'status' => $status,
                    'photo' => (is_object($user->getMainPhoto())) ? $user->getMainPhoto()->getFaceWebPath() : $user->getNoPhoto(),
                    'id' => $user->getId(),
                    'username' => $user->getUsername(),
                    'password' => $user->getFacebook(),
                );

            }
            return $this->view($response, Response::HTTP_OK);

        } else {
            if(!empty($username) and !empty($password)) {
                $response = array(
                    'msg' => 'Error',
                    'user' => $username,
                );
            }else{
                $response = array(
                    'user' => array('login' => 0)
                );
            }
            return $this->view($response, Response::HTTP_OK);
        }
    }


    /**
     * @param $user
     * @return string
     */
    public function getUserStatus($user)
    {

        /*if(!$user->getIsActive()) {
            $status = 'not_activated';
             }elseif($user->getGender()->getId() == 2 && !$user->hasPhotos()){
                $status = 'no_photo';
        }else{*/
        $status = 'login';
        //}
        return $status;
    }

    /**
     * @ApiDoc(
     *  description="Send contact form",
     *  statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     *
     */
    public function getLoginAction()
    {
        $this->get('translator')->trans('Hello World');
        return $this->view(array(
            'login' => array(
                'username' => array(
                    'label' => $this->get('translator')->trans('* שם משתמש/אימייל'),
                    'type' => 'text',
                    'value' => '',
                ),
                'password' => array(
                    'label' => $this->get('translator')->trans('* סיסמה'),
                    'type' => 'password',
                    'value' => '',
                ),
                'facebook' => array(
                    'pop_header' => $this->get('translator')->trans('כניסה דרך פייסבוק'),
                    'pop_message' =>  $this->get('translator')->trans('האם אתה מעוניין להיכנס עם חשבון קיים או לפתוח חשבון חדש באמצעות פייסבוק?'),
                    'pop_button' =>  $this->get('translator')->trans('פתיחת חשבון חדש'),
                    'pop_cancel' =>  $this->get('translator')->trans('כניסה עם חשבון קיים'),
                    'login_button' =>  $this->get('translator')->trans('כניסה עם חשבון פייסבוק'),
                    'login_text_h' =>  $this->get('translator')->trans('כניסה עם משתמש קיים'),
                    'login_text_p' =>  $this->get('translator')->trans('לביצוע כניסה ראשונית בלבד נא להכניס את פרטי המשתמש שלך'),
                ),
                'finger_login' => 'כניסה לגרינדייט באמצעות טביעת אצבע',
                'forgot_password' => $this->get('translator')->trans('שכחתי את הסיסמה'),
                'join_free' => $this->get('translator')->trans('הרשמה חינם'),
                'submit' => $this->get('translator')->trans('כניסה'),
            ),
            'errors' => array(
                'bad_credentials' => $this->get('translator')->trans('שם משתמש או סיסמה לא נכונים'),
                'account_is_disabled' => $this->get('translator')->trans('החשבון נחסם על ידי מנהל המערכת')
            )
        ), Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *  description="Get translate string. If translate string is empty then to get all translations strings",
     *  parameters={
     *      {"name"="string", "dataType"="array", "required"=false, "description"="String for translate"}
     *  },
     *  statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     *
     */
    public function getTranslationsAction(Request $request)
    {
        $string = $request->get('string', false);
        if (!$string) {
            $catalogue = $this->get('translator')->getCatalogue($request->getLocale());
            $messages = $catalogue->all();
            while ($catalogue = $catalogue->getFallbackCatalogue()) {
                $messages = array_replace_recursive($catalogue->all(), $messages);
            }
        } else {

            if (is_array($string)) {
                foreach ($string as $str) {
                    $messages[$str] = /** @Ignore */
                        $this->get('translator')->trans($str);
                }
            } else {
                $messages[$string] = /** @Ignore */
                    $this->get('translator')->trans($string);
            }
        }
        return $this->view($messages, Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *  description="Send recovery password by email",
     *  parameters = {
     *     {"name"="form[email]", "dataType"="string", "required"=true, "description"="Email"},
     *     {"name"="form[_token]", "dataType"="string", "required"=true, "description"="token"}
     *  },
     *  statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     *
     */
    public function postPasswordAction(Request $request)
    {
        return $this->view($this->passwordForm($request), Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *  description="Get Password recovery form",
     *  statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     *
     */
    public function getPasswordAction(Request $request)
    {
        return $this->view($this->passwordForm($request), Response::HTTP_OK);

    }
    public function passwordForm($request){
        $success = false;
        $res = array();

         $contrains_email =  new Constraints\Email(array(
                'checkMX' => true,
            ));
        $contrains_email->message = 'כתובת המייל אינה תקינה';

        $form = $this->createFormBuilder(null, array('csrf_protection' => false))
            ->add('email', 'text', array(
                'label' => $this->get('translator')->trans('אימייל'),
                'constraints' => array(
                    new Constraints\NotBlank(),
                    $contrains_email
                ),

            ))
            ->getForm();

        if($request->isMethod('POST')){
            $form->submit($request->request->get($form->getName()));
            //$form->handleRequest($request);
            //var_dump($form->isValid());die;
            if($form->isValid() && $form->isSubmitted()){
                $success = false;
                $requestData = $request->get('form');
                $email = $requestData['email'];

                //   $email = ($form->get('email')->getData()) ? $form->get('email')->getData() : $form->getData()->getEmail();


                $user = $this->getDoctrine()->getRepository('AppBundle:User')->findOneByEmail($email);
                if($user){
                    $em = $this->getDoctrine()->getManager();
                    $pass = substr(sha1(uniqid(mt_rand(), true)), 0 , 7);
                    $encoder = $this->container->get('security.password_encoder');
                    $encoded = $encoder->encodePassword($user, $pass);
                    $user->setPassword($encoded);
                    $em->persist($user);
                    $em->flush();

                    $subject =  'גרינדייט | איפוס סיסמה | ' . date('d/m/Y');

                    $settings = $this->getDoctrine()->getManager()->getRepository('AppBundle:Settings')->find(1);
                    $text = '<html lang="he">
						<head>
							<meta http-equiv="content-type" content="text/html; charset=utf-8">
						</head>
						<body>
	                        <div dir="rtl">' .
                        $this->get('translator')->trans('שלום') .' '.
                        $user->getUsername() . ', <br />' .
                        $this->get('translator')->trans('סיסמה:') .
                        '<input type="text" style="direction:ltr;width:100px;" value="' . $pass . '"/>
	                        </div>
                        </body>
					</html>
                    ';

                    /*$headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= 'From: Admin <' . $settings->getContactEmail() . '>' . "\r\n";
                    //$headers .= 'From: Admin <info@greendate.co.il>' . "\r\n";
                    mail($user->getEmail(),$subject,$text,$headers);
                    */
                    $message = \Swift_Message::newInstance()
                        ->setSubject($subject)
                        ->setFrom($settings->getContactEmail())
                        ->setTo(array($user->getEmail()))
                        ->setBody(
                            $text,
                            'text/html'
                        )
                    ;

                    $this->get('mailer')->send($message);

                    $success = true;
                    $res['success'] = $this->get('translator')->trans('סיסמה חדשה נשלחה לדוא"ל שהזנת.');
                }else{
                    $form->get('email')->addError(new FormError($this->get('translator')->trans("אימייל לא קיים")));
                }
            }
            $res['errors'] = $form->getErrors();
        }

        $res['form'] = $this->transformForm($form);
        $res['send'] = $success;

        return $res;
    }

    public function transformForm($form, $userData = false)
    {
        $notShow = array('fields' => array(), 'values' => array());
        if ($userData) {
            if (is_object($userData->getGender()) and $userData->getGender()->getId() == 2) {
                $notShow = array('fields' => array('status', 'netWorth', 'income'), 'values' => array('features' => array(3)));
            }
        }
        $formArr = array();

        foreach ($form->createView()->children as $key => $field) {

            if (!in_array($key, (array)$notShow['fields'])) {
                if ($field->vars['block_prefixes'][count($field->vars['block_prefixes']) - 2] == 'repeated') {
                    foreach ($field as $key2 => $chield) {
                        $formArr[$key][$key2] = array(
                            'name' => $chield->vars['full_name'],
                            /** @Ignore */
                            'label' => $this->get('translator')->trans($chield->vars['label']),
                            'type' => $chield->vars['block_prefixes'][count($chield->vars['block_prefixes']) - 2],
                            'value' => $chield->vars['value'],
                        );
                    }

                } elseif (in_array($field->vars['block_prefixes'][count($field->vars['block_prefixes']) - 2], array('entity', 'choice'))) {
                    $choices = array();
                    $order = ($key == 'city') ? array(1229, 509, 421, 130, 61) : array();

                    if ($key == 'city') {
                        $choices = $order;
                    }


                    foreach ($field->vars['choices'] as $chield) {
                        $arr = (isset($notShow['values'][$key])) ? $notShow['values'][$key] : array();
                        if (!in_array($chield->value, $arr)) {
                            if (!in_array($chield->value, $order)) {
                                $choices[] = array(
                                    'value' => $chield->value,
                                    'label' => $chield->label,
                                );
                            } else {
                                $k = array_search($chield->value, $order);
                                $choices[$k] = array(
                                    'value' => $chield->value,
                                    'label' => $chield->label,
                                );
                            }
                        }
                    }
                    /*
                    $choices = array();
                    foreach ($field->vars['choices'] as $chield) {
                        $arr = (isset($notShow['values'][$key])) ? $notShow['values'][$key] : array();
                        if(!in_array($chield->value, $arr)) {
                            $choices[] = array(
                                'value' => $chield->value,
                                'label' => $chield->label,
                            );
                        }
                    }
                    */
                    $formArr[$key] = array(
                        'name' => $field->vars['full_name'],
                        /** @Ignore */
                        'label' => $this->get('translator')->trans($field->vars['label']),
                        'type' => $field->vars['block_prefixes'][count($field->vars['block_prefixes']) - 2],
                        'value' => (is_array($field->vars['value'])) ? array() : $field->vars['value'],
                        'choices' => $choices,
                    );


                } else {


                    $formArr[$key] = array(
                        'name' => $field->vars['full_name'],
                        /** @Ignore */
                        'label' => (
                        ($key == 'agree') ? '' : /** @Ignore */
                            $this->get('translator')->trans($field->vars['label'])
                        ),

                        'type' => $field->vars['block_prefixes'][count($field->vars['block_prefixes']) - 2],
                        'value' => $field->vars['value'],
                    );
                    if ($key == 'agree') {
                        $formArr[$key]['text1'] = $this->get('translator')->trans('* אני מסכים/ה');
                        $formArr[$key]['text2'] = '/open_api/pages/4';
                        $formArr[$key]['text3'] = $this->get('translator')->trans('לתנאי השימוש');
                        $formArr[$key]['text4'] = $this->get('translator')->trans('באתר');
                    }
                    if ($key == 'agreeSendEmails') {
                        $formArr[$key]['text1'] = $this->get('translator')->trans('* אני מסכים/ה לקבל חומר פרסומי למייל או ב-');
                        $formArr[$key]['text2'] = $this->get('translator')->trans('SMS');
                    }

                }
            }
        }

        $formArr['submit'] = $this->get('translator')->trans('שלח');
        $formArr['next_step'] = $this->get('translator')->trans('לשלב הבא');
        return $formArr;
    }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Get Menu",
     *
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */

    public function getMenuAction()
    {
        $menu = array(
            'Online',
            'The Arena',
            'Notifications',
            'Inbox',
            'Favorited',
            'Favorited Me',
            'Contact Us',
            'Search',
            'Contacts',
            'Viewed',
            'Viewed Me',
            'Contacted',
            'Contacted Me',
            'Blocked',
            'Edit Profile',
            'Edit Photos',
            'View my profile',
            'Change Password',
            'Freeze Account',
            'Settings',
            'Log Out',
            'Back',
            'Forgot Password',
            'Login',
            'Join Free'
        );
        //$menu = $this->transformStringArray($menu);
        $menu = array(
            'online' => 'אונליין',
            'the_arena' => 'הזירה',
            'notifications' => 'התראות',
            'inbox' => 'הודעות',
            //'favorited' => 'צרפתי למועדפים',
            'favorited_me' => 'צרפו אותי למועדפים',
            'contact_us' => 'צור קשר',
            //'search' => 'חיפוש',
            'contacts' => 'רשימות',
            'contacted' => 'פניתי אליהם',
            'contacted_me' => 'פנו אלי',
            'viewed_me' => 'צפו בי',
            'viewed' => 'צפיתי בהם',
            'back' => 'חזור',
            'search' => 'חיפוש',
            'edit_profile' => 'עריכת פרופיל',
            'edit_photos' => 'עריכת תמונות',
            'favorited' => 'ניהול רשימת מועדפים',
            'view_my_profile' => 'הפרופיל שלי',
            'change_password' => 'עדכון סיסמה',
            'forgot_password' => 'שכחתי את הסיסמה',
            'blocked' => 'ניהול רשימת חסומים',
            'freeze_account' => 'הקפאת חשבון',
            'log_out' => 'התנתקות',
            'settings' => 'הגדרות',
            'login' => 'התחברות',
            'join_free' => 'הרשמה חינם',
            'subscription' => 'רכישת מנוי',

        );

        $menu['stats'] = $this->get('translator')->trans('Stats');
        return $this->view(array(
            'menu' => $menu,
            //'siteIsPay' => $settings->getIsCharge(),
        ), Response::HTTP_OK);
    }

    public function transformStringArray($array)
    {
        $newArray = array();
        foreach ($array as $key => $string) {
            $newKey = (is_int($key)) ? $string : $key;
            $newKey = strtolower(str_replace(array('.', ',', ':', ';', '!', '?', ' '), array('', '', '', '', '', '', '_'), $newKey));
            /** @Ignore */
            $newStr = (is_int($key)) ? /** @Ignore */
                $this->get('translator')->trans($string) : $string;
            $newArray[$newKey] = $newStr;
        }
        return $newArray;
    }


    /**
     * @ApiDoc(
     *   resource = true,
     *   description = "Get app version",
     *   statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     */
    public function getVersionAction(Request $request)
    {
        $version = '0.0.1';
        //var_dump('1232');die;
        $mobileDetector = $this->get('mobile_detect.mobile_detector');
        if ($mobileDetector->isAndroidOS()) {
            $version = '1.1.2';
        }
        if ($mobileDetector->isIOS()) {
            $version = '1.0.0';
        }
        return $this->view(array(
            'update'=>'עדכון',
            'cancel'=>' ',
            'title'=>'יש לך גרסה חדשה זמינה',
            'message'=> 'בקר בחנות האפליקציות ועדכן כעת',
            'android_version' => '1.1.2',
            'ios_version' => '1.0.0',
            //'can_later' => false,
        ), Response::HTTP_OK);
    }

    /**
     * @ApiDoc(
     *  description="Send video streaming",
     *  statusCodes = {
     *     200 = "Returned when successful",
     *     401 = "Returned when bad credentials were sent"
     *   }
     * )
     *
     */
    public function postVideoAction(Request $request)
    {
        /*
          {"room"="room", "dataType"="string", "required"=true, "description"="Room Id"},
          {"user_id"="user_id", "dataType"="string", "required"=true, "description"="Send user id"},
          {"last"="last", "dataType"="string", "required"=true, "description"="data of message"},
          {"mess"="mess", "dataType"="string", "required"=true, "description"="message"}
         */
        //var_dump($request->request->all());die;
        header("Access-Control-Allow-Origin: *");
        $room = $request->request->get('room', 0);
        $user_id = $request->request->get('user_id', false);
        $user_to = $request->request->get('user_to', false);
        $last = $request->request->get('last', 0);
        $mess = $request->request->get('mess', 0);
        $mess = json_decode($mess, true);
        if($user_id and $user_to) {
            $conn = $this->getDoctrine()->getManager()->getConnection();
            if ($room == 0) {
                $sql = "SELECT * FROM video_chat WHERE (u_from = ? AND u_to = ?) OR (u_from = ? AND u_to = ?)" ;
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1,$user_id);
                $stmt->bindParam(2,$user_to);
                $stmt->bindParam(3,$user_to);
                $stmt->bindParam(4,$user_id);
                $stmt->execute();
                $chat = $stmt->fetch();
            }else{
                $sql = "SELECT * FROM video_chat WHERE id = ?" ;
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1,$room);
                $stmt->execute();
                $chat = $stmt->fetch();
            }
            if(!$chat){
                $data = serialize(array($user_id => array(), $user_to => array($last => $mess)));

                $sql = "INSERT INTO video_chat (u_from, u_to, data) VALUES (?,?,?)" ;
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $user_id);
                $stmt->bindParam(2, $user_to);
                $stmt->bindParam(3, $data);
                $stmt->execute();

                $sql = "SELECT * FROM video_chat WHERE (u_from = ? AND u_to = ?) OR (u_from = ? AND u_to = ?)" ;
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1,$user_id);
                $stmt->bindParam(2,$user_to);
                $stmt->bindParam(3,$user_to);
                $stmt->bindParam(4,$user_id);
                $stmt->execute();
                $chat = $stmt->fetch();
                $msg = array();//$last => array('type' => 'offer')
            }else{

                $data = unserialize($chat['data']);
                if(isset($mess['type'])) {
                    $data[$user_id][$last] = $mess;
                }
                $msg = $data[$user_to];
//                if(count($msg) == 0){
//                    $msg[$last] = array('type' => 'offer');
//                }
                $data[$user_to] = array();

                $data = serialize($data);
                $sql = "UPDATE video_chat SET data = ? WHERE id = ?" ;
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(1, $data);
                $stmt->bindParam(2, $room);
                $stmt->execute();

            }
            $room = $chat['id'];
        }
//        return $this->view(array(
//            'result'=>'ok',
//            'last' => $last,
//            'msg' => $msg,
//            'room' => $room,
//        ), Response::HTTP_OK);

        $response = new JsonResponse(array(
            'result'=>'ok',
            'last' => $last,
            'msg' => $msg,
            'room' => $room));

        $response->headers->set('Access-Control-Allow-Origin', $request->headers->get('Origin'));
        $response->headers->set('Content-Type', 'application/json; charset=UTF-8');
        $response->headers->set('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
        $response->headers->set('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization');
        return $response;
    }


}
