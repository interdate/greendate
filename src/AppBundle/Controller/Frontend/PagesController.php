<?php

namespace AppBundle\Controller\Frontend;

use AppBundle\Entity\Page;
use AppBundle\Entity\User;
use AppBundle\Form\Type\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class PagesController extends Controller
{
    /**
     * @Route("עמודים/{uri}", name="pages_page")
     */
    public function indexAction(Request $request, $uri)
    {
        return $this->render('frontend/pages/index.html.twig', array(
            'page' => $this->getDoctrine()->getManager()  ->getRepository('AppBundle:Page')->findOneByUri($uri),
        ));
    }
    
    /**
     * @Route("שאלות_תשובות", name="faq")
     */
    public function faqAction()
    {
        return $this->render('frontend/pages/faq.html.twig', array(
            'categories' => $this->getDoctrine()->getManager()->getRepository('AppBundle:FaqCategory')->findByIsActive(true),
            'seo' => $this->getDoctrine()->getRepository('AppBundle:Seo')->findOneByPage('faq'),
        ));
    }

    /**
     * @Route("צור_קשר", name="contact")
     */
    public function contactAction(Request $request)
    {
        $sent = false;

        $user = $this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')
            ? $this->getUser()
            : new User()
        ;

        $form = $this->createForm(new ContactType(), $user);

        if($request->isMethod('Post')){
            $form->handleRequest($request);
            if($form->isValid() && $form->isSubmitted()){
            	
            	$mobileDetector = $this->get('mobile_detect.mobile_detector');
            	
            	if($mobileDetector->isMobile()){
            		$platform = 'Mobile';
            	}else {
            		$platform = 'Desktop';
            	}
            	
            	$email = ($form->get('email')->getData()) ? $form->get('email')->getData() : $form->getData()->getEmail();
           
                $subject = "גרינדייט | צור קשר | " . date('d/m/Y H:i') . " | " . $form->get('subject')->getData();
                $text = $form->get('text')->getData();
                $body = '<html lang="he">
						<head>
							<meta http-equiv="content-type" content="text/html; charset=utf-8">
						</head>
						<body>
                		<div dir="rtl">';
                $body .= $text . '<br>';
                $body .= 'נשלח מ: '. $platform;
                $body .= '</div>
                		</body>
					</html>';
            	$headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                $headers .= 'From: ' . $email . ' <' . $email . '>' . "\r\n";
                $settings = $this->getDoctrine()->getRepository('AppBundle:Settings')->find(1);
                mail($settings->getContactEmail(),$subject,$body,$headers);
                $sent = true;
            }
        }

        return $this->render('frontend/pages/contact.html.twig', array(
            'form' => $form->createView(),
            'sent' => $sent,
        ));
    }
}
