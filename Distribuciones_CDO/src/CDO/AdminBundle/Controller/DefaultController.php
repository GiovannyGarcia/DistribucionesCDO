<?php

namespace CDO\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CDOAdminBundle:Default:index.html.twig');
    }
}
