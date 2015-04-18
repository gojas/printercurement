<?php

namespace Printercurement\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TreeController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CoreBundle:Default:index.html.twig', array('name' => $name));
    }
}
