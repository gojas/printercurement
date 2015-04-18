<?php

namespace Printercurement\EsourcingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('EsourcingBundle:Index:esourcing.html.twig');
    }
}
