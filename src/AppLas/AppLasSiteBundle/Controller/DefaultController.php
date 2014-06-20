<?php

namespace AppLas\AppLasSiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    /**
     * @Route("/default")
     * 
     */
class DefaultController extends Controller
{
    /**
     * @Route("/mapa")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => "ss");
    }
}
