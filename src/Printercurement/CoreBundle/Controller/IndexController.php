<?php

namespace Printercurement\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreBundle:Home:index.html.twig');
    }
}
