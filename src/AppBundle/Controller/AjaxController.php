<?php

namespace AppBundle\Controller;

use AppBundle\Entity\City;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Cookie;


class AjaxController extends Controller
{
    /**
     * @Route("/ajax/cities", )
     */
    public function getCities(Request $request)
    {
        $word = $request->query->get('word');

        $repository = $this->getDoctrine()->getRepository(City::class);
        $query = $repository->createQueryBuilder('p')
            ->select('p.id,p.name')
            ->where('p.name LIKE :name')
            ->setParameter('name', $word.'%')
            ->getQuery();

        $result = $query->getResult();

        $cities = array_merge(
        		array(
        				array('id' => 1229,'name'=>'תל אביב'),
        				array('id' => 509,'name'=>'ירושלים'),
        				array('id'=>421, 'name'=>'חיפה'),
        				array('id'=>130,'name'=>'באר שבע'),
        				array('id'=>61,'name'=>'אילת')
        		),
        		$result
        		);
        
        return new Response(json_encode($cities));
     //   return new Response(json_encode($request->query->get('word')));
    }
    
    /**
     * @Route("/close_app_notification", name="close_app_notification")
     */
    public function closeAppNotificationAction()
    {
    	$response = new Response();
    	$cookie = new Cookie('closeAppNotification', '1', strtotime('now + 7 days'));
    	$response->headers->setCookie($cookie);
    	return $response;
    }
 
}
