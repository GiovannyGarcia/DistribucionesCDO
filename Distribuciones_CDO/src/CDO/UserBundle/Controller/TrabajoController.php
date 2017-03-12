<?php

namespace CDO\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TrabajoController extends Controller
{
    public function indexAction()
    {
        return $this->render('CDOUserBundle:User:user.html.twig');
    }
}
