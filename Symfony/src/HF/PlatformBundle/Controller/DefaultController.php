<?php

namespace HF\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('HFPlatformBundle:Default:index.html.twig');
    }
}
