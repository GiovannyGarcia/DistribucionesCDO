<?php

namespace CDO\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function crearAction()
    {
        return $this->render('CDOUserBundle:User:index.html.twig');
    }
}
