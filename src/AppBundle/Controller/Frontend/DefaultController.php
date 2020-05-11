<?php

namespace AppBundle\Controller\Frontend;

use AppBundle\Entity\User;
use AppBundle\Form\Type\QuickSearchHomePageType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {

            if($this->getUser()->getIsFrozen()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($this->getUser()->setIsFrozen(false)->setFreezeReason(null));
                $em->flush();
            }

            return $this->getUser()->isAdmin()
                ? $this->redirect($this->generateUrl('admin_users'))
                : $this->redirect($this->generateUrl('user_homepage'));

        }

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $form = $this->createForm(new QuickSearchHomePageType(), new User());


        $users = $this->getDoctrine()->getRepository('AppBundle:User')->onHomepage();

        return $this->render('frontend/index.html.twig', array(
            'last_username'     => $lastUsername,
            'error'             => $error,
            'articles'          => $this->getDoctrine()->getRepository('AppBundle:Article')->getOnHomepage(),
            'homePageBlocks'    => $this->getDoctrine()->getRepository('AppBundle:HomePage')->findAll(),
            'seo'               => $this->getDoctrine()->getRepository('AppBundle:Seo')->findOneByPage('homepage'),
            'slides'            => $this->getDoctrine()->getRepository('AppBundle:Slide')->findByIsActive(true),
            'form'              => $form->createView(),
            'users'             => $users,
        ));
    }
}
