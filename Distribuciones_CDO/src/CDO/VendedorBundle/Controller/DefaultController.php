<?php

namespace CDO\VendedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CDOVendedorBundle:Default:index.html.twig');
    }
}
