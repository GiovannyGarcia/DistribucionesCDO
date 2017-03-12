<?php

namespace CDO\bdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CDObdBundle:Default:index.html.twig');
    }
}
