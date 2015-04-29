<?php

namespace Printercurement\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Admin:index.html.twig');
    }
}
