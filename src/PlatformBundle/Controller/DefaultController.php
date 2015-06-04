<?php

namespace PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PlatformBundle:Default:index.html.twig', array('name' => $name));
    }
}
