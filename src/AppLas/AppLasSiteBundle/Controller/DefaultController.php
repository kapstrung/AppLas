<?php

namespace AppLas\AppLasSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppLas\AppLasSiteBundle\Entity\Punkt;

/**
 * @Route("/default")
 * 
 */
class DefaultController extends Controller {

    /**
     * @Route("/mapa")
     * @Template()
     */
    public function indexAction() {
        $punkt = new Punkt();
        $punkt->setLongitude(32, 223);
        $punkt->setLatitude(31, 0001);
        $punkt->setDatAktual("30-11-2013");
        $punkt->setKolejnosc(2);
        $punkt->setObiektId(2);
        
        $em = $this->getDoctrine()->getManager();
        $em->persist($punkt);
        $em->flush();
        return array('name' => "ss");
    }

}
