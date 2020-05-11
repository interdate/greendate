<?php

namespace AppBundle\Controller\Backend;

use AppBundle\Entity\Faq;
use AppBundle\Entity\FaqCategory;
use AppBundle\Entity\FooterHeader;
use AppBundle\Entity\HomePage;
use AppBundle\Entity\Page;
use AppBundle\Entity\PaymentSubscription;
use AppBundle\Entity\Slide;
use AppBundle\Entity\TableTextPayment;
use AppBundle\Entity\TextAfterPayment;
use AppBundle\Entity\TextBeforePayment;
use AppBundle\Form\Type\FaqCategoryType;
use AppBundle\Form\Type\FaqType;
use AppBundle\Form\Type\PageType;
use AppBundle\Form\Type\SlideType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ContentController extends Controller
{
    /**
     * @Route("/admin/content", name="admin_content")
     */
    public function indexAction()
    {
        $manager = $this->getDoctrine()->getManager();

        return $this->render('backend/content/index.html.twig', array(
            'pages' => $manager->getRepository('AppBundle:Page')->findAll(),
            'slides' => $manager->getRepository('AppBundle:Slide')->findAll(),
            'homePageBlocks' => $manager->getRepository('AppBundle:HomePage')->findAll(),
            'homePageSeo' => $manager->getRepository('AppBundle:Seo')->findOneByPage('homepage'),
            'faqPageSeo' => $manager->getRepository('AppBundle:Seo')->findOneByPage('faq'),
            'footerHeaders' => $manager->getRepository('AppBundle:FooterHeader')->findAll(),
            'faqCategories' => $manager->getRepository('AppBundle:FaqCategory')->findAll(),
        ));
    }

    /**
     * @Route("/admin/content/page", name="admin_content_page")
     */
    public function pageAction(Request $request)
    {
        $page = new Page();
        $form = $this->createForm(new PageType(), $page);
        return $this->processPageForm($request, $form, $page);
    }

    /**
     * @Route("/admin/content/page/{id}", name="admin_content_page_edit")
     */
    public function editPageAction(Request $request, Page $page)
    {
        $form = $this->createForm(new PageType(), $page);
        return $this->processPageForm($request, $form, $page);
    }

    public function processPageForm($request, $form, $page)
    {
        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                if(empty(trim($page->getUri()))){
                    $page->setUri(str_replace(" ", "_", $page->getName()));
                }

                $em = $this->getDoctrine()->getManager();
                $em->persist($page);
                $em->flush();
                return $this->redirect($this->generateUrl('admin_content'));
            }
        }

        return $this->render('backend/content/page.html.twig', array(
            'form' => $form->createView(),
            'page' => $page,
        ));
    }

    /**
     * @Route("/admin/content/payment", name="admin_content_payment_edit")
     */
    public function editPaymentPage(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            $title = $request->request->get('title', false);
            if($title !== false){
                $titleEntity = $em->getRepository('AppBundle:TextBeforePayment')->find(1);
                $titleEntity->setTitle($title);
                $em->persist($titleEntity);
                $em->flush();
                return new Response();
            }
        }
        $textBefore = $em->getRepository('AppBundle:TextBeforePayment')->findBy(array(),array('order' => 'asc'));
        $paymentSubscriptions = $em->getRepository('AppBundle:PaymentSubscription')->findBy(array(),array('order' => 'asc'));
        $tableTexts = $em->getRepository('AppBundle:TableTextPayment')->findBy(array(),array('order' => 'asc'));
        $textAfter = $em->getRepository('AppBundle:TextAfterPayment')->findBy(array(),array('order' => 'asc'));
        return $this->render('backend/content/payment.html.twig', array(
            'textBefore' => $textBefore,
            'payments' => $paymentSubscriptions,
            'tableTexts' => $tableTexts,
            'textAfter' => $textAfter,
        ));
    }

    /**
     * @Route("/admin/content/payment/edit/{form}/{id}", name="admin_payment_content_edit")
     */
    public function editPaymentContentPage(Request $request, $form, $id = 0){
        $em = $this->getDoctrine()->getManager();
        $paymentContent = false;
        if((int)$id == 0) {
            if($form == 'TextBeforePayment') {
                $paymentContent = new TextBeforePayment();
            }elseif ($form == 'PaymentSubscription'){
                $paymentContent = new PaymentSubscription();
            }elseif ($form == 'TableTextPayment'){
                $paymentContent = new TableTextPayment();
            }elseif ($form == 'TextAfterPayment'){
                $paymentContent = new TextAfterPayment();
            }
        }else {
            $paymentContent = $em->getRepository('AppBundle:' . $form)->find($id);
        }

        if($paymentContent){
            $formEn = $this->createFormBuilder();
            $formEn->add('id', 'hidden', array(
                'data' => $paymentContent->getId()
            ))
            ->add('isActive', 'checkbox', array(
                'label' => 'פעיל',
                'required' => false,
                'data' => $paymentContent->getIsActive(),
            ))->add('order', 'text', array(
                'label' => 'Order',
                'data' => $paymentContent->getOrder(),
            ));

            if($form != 'TableTextPayment') {
                $formEn->add('text', 'textarea', array(
                    'label' => 'טקסט',
                    'data' => $paymentContent->getText(),
                    'required' => false,
                ));
            }
            if($form == 'TableTextPayment' or $form == 'PaymentSubscription') {
                $formEn->add('title', 'text', array(
                    'label' => 'Title',
                    'data' => $paymentContent->getTitle(),
                    'required' => true,
                ));
            }
            if($form == 'TableTextPayment'){
                $formEn->add('pay', 'checkbox', array(
                    'label' => 'מנוי',
                    'required' => false,
                    'data' => $paymentContent->getPay(),
                ))->add('notPay', 'checkbox', array(
                    'label' => 'חבר',
                    'required' => false,
                    'data' => $paymentContent->getNotPay(),
                ));
            }
            if($form == 'PaymentSubscription'){
                //amount, price, textPrice
                $formEn->add('amount', 'text', array(
                    'label' => 'Amount',
                    'data' => $paymentContent->getAmount(),
                    'required' => true,
                ))->add('price', 'text', array(
                    'label' => 'Price in month',
                    'data' => $paymentContent->getPrice(),
                    'required' => true,
                ))->add('textPrice', 'text', array(
                    'label' => 'Amount',
                    'data' => (empty($paymentContent->getTextPrice())) ? 'לחודש' : $paymentContent->getTextPrice(),
                    'required' => true,
                ));
            }

            $formEn = $formEn->getForm();
            $formEn->handleRequest($request);
            //$form = $this->createForm(new SubscriptionType($user, $this->getDoctrine()));
            $save = '0';
            //var_dump($paymentContent->getText());die;
            if ($request->isMethod('POST')) {
                if ($formEn->isSubmitted() && $formEn->isValid()) {
                    $data = $formEn->getData();
                    if((int)$data['order'] > 0){
                        $conn = $this->getDoctrine()->getManager()->getConnection();
                        $index = 1;
                        if($form == 'TextAfterPayment'){
                            $index = 2;
                        }elseif ($form == 'PaymentSubscription'){
                            $index = 3;
                        }elseif ($form == 'TableTextPayment'){
                            $index = 4;
                        }
                        $res = $conn->query("SELECT id FROM content_payment WHERE `part` = " . $index . " AND `order_id` = " . (int)$data['order'])
                            ->fetch();
                        if($res and $res['id'] != $paymentContent->getId()){
                            $stmt = $conn->prepare("UPDATE content_payment SET order_id = order_id + 1 WHERE `part` = " . $index . " AND `order_id` >= " . (int)$data['order']);
                            $stmt->execute();
                            $result = $stmt->fetch();
                        }
                    }

                    foreach ($data as $key => $val){
                        if($key == 'text'){
                            $paymentContent->setText($val);
                        }
                        if($key == 'title'){
                            $paymentContent->setTitle($val);
                        }
                        if($key == 'isActive'){
                            $paymentContent->setIsActive((boolean)$val);
                        }
                        if($key == 'pay'){
                            $paymentContent->setPay((boolean)$val);
                        }
                        if($key == 'notPay'){
                            $paymentContent->setNotPay((boolean)$val);
                        }
                        if($key == 'amount'){
                            $paymentContent->setAmount($val);
                        }
                        if($key == 'price'){
                            $paymentContent->setPrice($val);
                        }
                        if($key == 'textPrice'){
                            $paymentContent->setTextPrice($val);
                        }
                        if($key == 'order'){
                            $val = (int)$val;
                            $paymentContent->setOrder($val);
                            //var_dump($val,$paymentContent->getOrder());
                        }
                    }
                    //var_dump($data['order'],$paymentContent->getOrder());die;
                    $em->persist($paymentContent);
                    $em->flush();
                    return $this->redirect($this->generateUrl('admin_content_payment_edit'));
                }
            }
        }
        return $this->render('backend/content/edit_payment.html.twig', array(
            'payment' => $paymentContent,
            'form' => $formEn->createView(),
            'type' => $form,
        ));
    }

    /**
     * @Route("/admin/content/page/{id}/{property}/{value}", name="admin_content_set_page_property")
     */
    function setPagePropertyAction(Page $page, $property, $value)
    {
        $em = $this->getDoctrine()->getManager();
        $setter = 'set' . ucfirst($property);
        $page->$setter($value);
        $em->persist($page);
        $em->flush();
        return new Response();
    }

    /**
     * @Route("/admin/content/page/{id}/delete", name="admin_content_page_delete")
     */
    function deletePageAction(Page $page)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($page);
        $em->flush();
        return new Response();
    }

    /**
     * @Route("/admin/content/slide/{id}", name="admin_content_slide_edit")
     */
    public function editSlideAction(Request $request, Slide $slide)
    {
        $form = $this->createForm(new SlideType(), $slide);
        $this->setUpCloudinary();
        $renderedCloudForm = cl_image_upload_tag('image_id');

        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($slide);
                $em->flush();
            }
        }

        return $this->render('backend/content/slide.html.twig', array(
            'form' => $form->createView(),
            'renderedCloudForm' => $renderedCloudForm,
            'slide' => $slide,
        ));
    }

    /**
     * @Route("/admin/content/homepage/block/{id}", name="admin_content_homepage_block_edit")
     */
    public function editHomePageBlockAction(Request $request, HomePage $homePageBlock)
    {
        $name = $request->request->get('name', null);
        $headerType = $request->request->get('headerType', null);
        $block1 = $request->request->get('block1', null);
        $block2 = $request->request->get('block2', null);
        $block3 = $request->request->get('block3', null);
        $block4 = $request->request->get('block4', null);

        if(null !== $name){
            $homePageBlock->setName($name);
        }

        if(null !== $headerType){
            $homePageBlock->setHeaderType($headerType);
        }

        if(null !== $block1){
            $homePageBlock->setBlock1($block1);
        }

        if(null !== $block2){
            $homePageBlock->setBlock2($block2);
        }

        if(null !== $block3){
            $homePageBlock->setBlock3($block3);
        }

        if(null !== $block4){
            $homePageBlock->setBlock4($block4);
        }

        $em = $this->getDoctrine()->getManager();
        $em->persist($homePageBlock);
        $em->flush();

        return new Response();
    }


    /**
     * @Route("/admin/content/pages/seo", name="admin_content_page_seo")
     */
    public function pageSeoAction(Request $request)
    {
        $page = $this->getDoctrine()->getManager()->getRepository('AppBundle:Seo')->findOneByPage(
            $request->request->get('page')
        );

        $page->setTitle($request->request->get('title'));
        $page->setDescription($request->request->get('description'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($page);
        $em->flush();

        return new Response();
    }


    /**
     * @Route("/admin/content/footer/header/{id}", name="admin_content_footer_header_edit")
     */
    public function editFooterHeaderAction(Request $request, FooterHeader $footerHeader)
    {
        $name = $request->request->get('name', null);

        if(null !== $name){
            $footerHeader->setName($name);
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($footerHeader);
        $em->flush();

        return new Response();
    }

    /**
     * @Route("/admin/content/faq/category", name="admin_content_faq_category")
     */
    public function faqCategoryAction(Request $request)
    {
        $category = new FaqCategory();
        $form = $this->createForm(new FaqCategoryType(), $category);
        return $this->processFaqCategoryForm($request, $form, $category);
    }

    /**
     * @Route("/admin/content/faq/category/{id}", defaults={"id" = null}, name="admin_content_faq_category_edit")
     */
    public function editFaqCategoryAction(Request $request, FaqCategory $category)
    {
        $form = $this->createForm(new FaqCategoryType(), $category);
        return $this->processFaqCategoryForm($request, $form, $category);
    }

    public function processFaqCategoryForm($request, $form, $category)
    {
        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($category);
                $em->flush();
                return $this->render('backend/content/faq_section.html.twig', array(
                    'active_tab' => $request->request->get('active_tab'),
                    'faqCategories' => $this->getDoctrine()
                        ->getManager()
                        ->getRepository('AppBundle:FaqCategory')
                        ->findAll(),
                    'faqPageSeo' => $this->getDoctrine()
                        ->getManager()
                        ->getRepository('AppBundle:Seo')
                        ->findOneByPage('faq'),
                ));
            }
        }

        return $this->render('backend/content/faq_category.html.twig', array(
            'form' => $form->createView(),
            'category' => $category,
        ));
    }

    /**
     * @Route("/admin/content/faq/category/{id}/{property}/{value}", defaults={"id" = null}, name="admin_content_faq_category_set_property")
     */
    public function setFaqCategoryPropertyAction(FaqCategory $category, $property, $value)
    {
        $em = $this->getDoctrine()->getManager();
        $setter = 'set' . ucfirst($property);
        $category->$setter($value);
        $em->persist($category);
        $em->flush();
        return new Response();
    }

    /**
     * @Route("/admin/content/faq/category/{id}/delete", name="admin_content_faq_category_delete")
     */
    function deleteFaqCategoryAction(FaqCategory $category)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();
        return new Response();
    }

    /**
     * @Route("/admin/content/faq", name="admin_content_faq")
     */
    public function faqAction(Request $request)
    {
        $faq = new Faq();
        $form = $this->createForm(new FaqType(), $faq);
        return $this->processFaqForm($request, $form, $faq);
    }

    /**
     * @Route("/admin/content/faq/{id}", requirements={"id": "\d+"}, name="admin_content_faq_edit")
     */
    public function editFaqAction(Request $request, Faq $faq)
    {
        $form = $this->createForm(new FaqType(), $faq);
        return $this->processFaqForm($request, $form, $faq);
    }


    /**
     * @Route("/admin/content/faq/{id}/delete", requirements={"id": "\d+"}, name="admin_content_faq_delete")
     */
    function deleteFaqAction(Faq $faq)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($faq);
        $em->flush();
        return new Response();
    }


    public function processFaqForm($request, $form, $faq)
    {
        if($request->isMethod('POST')) {
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($faq);
                $em->flush();
                return $this->render('backend/content/faq_section.html.twig', array(
                    'active_tab' => $request->request->get('active_tab'),
                    'faqCategories' => $this->getDoctrine()
                        ->getManager()
                        ->getRepository('AppBundle:FaqCategory')
                        ->findAll(),
                    'faqPageSeo' => $this->getDoctrine()
                        ->getManager()
                        ->getRepository('AppBundle:Seo')
                        ->findOneByPage('faq'),
                ));
            }
        }

        return $this->render('backend/content/faq.html.twig', array(
            'form' => $form->createView(),
            'faq' => $faq,
        ));
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
