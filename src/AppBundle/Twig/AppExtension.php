<?php

namespace AppBundle\Twig;

use AppBundle\Form\Type\AdminQuickSearchSidebarType;
use AppBundle\Form\Type\QuickSearchSidebarType;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class AppExtension extends \Twig_Extension
{
    protected $doctrine;
    protected $container;
    protected $requestStack;
    protected $messenger;

    public function __construct(RequestStack $requestStack, RegistryInterface $doctrine, $container, $messenger)
    {
        $this->requestStack = $requestStack;
        $this->doctrine = $doctrine;
        $this->container = $container;
        $this->messenger = $messenger;

    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('json_decode', array($this, 'jsonDecodeFilter')),
        );
    }

    public function jsonDecodeFilter($data){
        return json_decode($data, true);
    }

    public function getFunctions()
    {
        return array(
        	new \Twig_SimpleFunction('getDownloadApp', array($this, 'getDownloadAppFunction')),
            new \Twig_SimpleFunction('getSettings', array($this, 'getSettingsFunction')),
            new \Twig_SimpleFunction('getUsersOnline', array($this, 'getUsersOnlineFunction')),
            new \Twig_SimpleFunction('getNewUsers', array($this, 'getNewUsersFunction')),
            new \Twig_SimpleFunction('getStatistics', array($this, 'getStatisticsFunction')),
            new \Twig_SimpleFunction('getQuickSearchSidebarForm', array($this, 'getQuickSearchSidebarFormFunction')),
            new \Twig_SimpleFunction('getAdminQuickSearchSidebarForm', array($this, 'getAdminQuickSearchSidebarFormFunction')),
            new \Twig_SimpleFunction('getFooterBlocks', array($this, 'getFooterBlocksFunction')),
            new \Twig_SimpleFunction('getZodiac', array($this, 'getZodiacFunction')),
        );
    }

    public function getDownloadAppFunction($request)
    {
    	//$request = $this->getRequest();
    	$cookie = $request->cookies->all();
    	if(isset($cookie['closeAppNotification']) and $cookie['closeAppNotification'] == 1){
    		return false;
    	}
    	$mobileDetector = $this->container->get('mobile_detect.mobile_detector');
    	$link = ($mobileDetector->isiOS()) ? 'https://itunes.apple.com/il/app/greendate-%D7%92%D7%A8%D7%99%D7%A0%D7%93%D7%99%D7%99%D7%98/id1282964919?mt=8' : 'https://play.google.com/store/apps/details?id=il.co.greendate';
    	return $link;
    }
    
    public function getSettingsFunction()
    {
        return $this->doctrine->getManager()->getRepository('AppBundle:Settings')->find(1);
    }

    public function getUsersOnlineFunction()
    {
        $settings = $this->doctrine->getManager()->getRepository('AppBundle:Settings')->find(1);

        return $this->doctrine->getManager()->getRepository('AppBundle:User')->getOnline(
            array(
                'current_user' => $this->getUser(),
                'data' => null,
                'paginator' => $this->container->get('knp_paginator'),
                'page' => 1,
                'per_page' => $settings->getUsersPerPage(),
                'considered_as_online_minutes_number' => $settings->getUserConsideredAsOnlineAfterLastActivityMinutesNumber(),
            )
        );
    }

    public function getNewUsersFunction()
    {
        $settings = $this->doctrine->getManager()->getRepository('AppBundle:Settings')->find(1);

        return $this->doctrine->getManager()->getRepository('AppBundle:User')->getNew(
            array(
                'considered_as_new_days_number' => $settings->getUserConsideredAsNewAfterDaysNumber(),
                'per_page' => $settings->getUsersPerPage(),
                'current_user' => $this->getUser(),
            )
        );
    }

    public function getStatisticsFunction()
    {
        $settings = $this->doctrine->getManager()->getRepository('AppBundle:Settings')->find(1);
        $delay = new \DateTime();
        $delay->setTimestamp(strtotime(
            $settings->getUserConsideredAsOnlineAfterLastActivityMinutesNumber() . ' minutes ago')
        );
        $conn = $this->doctrine->getManager()->getConnection();
        return $conn->query("CALL get_statistics ('"
            . $delay->format('Y-m-d H:i:s.000000') . "', '"
            . $this->getUser()->getId() . "', '"
            . $this->getUser()->getGender()->getId() . "')")
            ->fetch();
    }

    public function getQuickSearchSidebarFormFunction(){
        return $this->getSideBarForm(new QuickSearchSidebarType());
    }

    public function getAdminQuickSearchSidebarFormFunction(){
        return $this->getSideBarForm(new AdminQuickSearchSidebarType());
    }

    public function getSideBarForm($type){
        return $this->container->get('form.factory')
            ->create($type)
            ->handleRequest($this->requestStack->getCurrentRequest())
            ->createView();
    }

    public function getFooterBlocksFunction()
    {
        return $this->doctrine
            ->getManager()
            ->getRepository('AppBundle:FooterHeader')
            ->findAll()
        ;
    }

    public function getZodiacFunction($date = ""){      
        
        $zodiac[355] = "גדי";
        $zodiac[325] = "קשת";
        $zodiac[296] = "עקרב";
        $zodiac[265] = "מאזניים";
        $zodiac[234] = "בתולה";
        $zodiac[203] = "אריה";
        $zodiac[172] = "סרטן";
        $zodiac[140] = "תאומים";
        $zodiac[110] = "שור";
        $zodiac[79]  = "טלה";
        $zodiac[49]  = "דגים";
        $zodiac[21]  = "דלי";
        $zodiac[0]   = "גדי";
        
        if (!$date) $date = time();
        $dayOfTheYear = date("z",$date);
        $isLeapYear = date("L",$date);
        
        if ($isLeapYear && ($dayOfTheYear > 59)){
        	$dayOfTheYear = $dayOfTheYear + 1;
        }
        foreach($zodiac as $day => $sign){
        	if ($dayOfTheYear >= $day){
        		break;
        	}
        }
        return $sign;
    }

    public function getUser()
    {
        return $this->container->get('security.token_storage')->getToken()->getUser();
    }

    public function getName()
    {
        return 'app_extension';
    }
}

?>