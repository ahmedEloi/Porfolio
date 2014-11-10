<?php

namespace portfolio\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('portfolioMainBundle:Default:index.html.twig');
    }
}
