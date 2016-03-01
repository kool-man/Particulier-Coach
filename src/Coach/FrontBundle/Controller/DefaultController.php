<?php

namespace Coach\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CoachFrontBundle:Default:index.html.twig', array('name' => $name));
    }

    public function infoAction()
    {
        phpinfo();
    }
}
