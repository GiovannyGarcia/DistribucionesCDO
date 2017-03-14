<?php

namespace CDO\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('CDOAdminBundle:Default:index.html.twig');
    }
    public function AutorizarAction()
    {
        return $this->render('CDOAdminBundle:Admin:autorizar.html.twig');
    }
    public function CRUDpdtoAction()
    {
        return $this->render('CDOAdminBundle:Admin:CRUDpdto.html.twig');
    }
}
