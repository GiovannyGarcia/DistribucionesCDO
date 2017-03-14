<?php

namespace CDO\VendedorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VendedorController extends Controller
{
    public function indexAction()
    {
        return $this->render('CDOVendedorBundle:Vendedor:index.html.twig');
    }

    public function VentasAction()
    {
        return $this->render('CDOVendedorBundle:Vendedor:Ventas.html.twig');
    }
    public function PedidosAction()
    {
        return $this->render('CDOVendedorBundle:Vendedor:Pedidos.html.twig');
    }


}
