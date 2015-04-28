<?php

namespace Printercurement\EprocurementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CartController extends Controller
{
    public function widgetAction()
    {
        return $this->render('EprocurementBundle:Cart:widget.html.twig');
    }
}
