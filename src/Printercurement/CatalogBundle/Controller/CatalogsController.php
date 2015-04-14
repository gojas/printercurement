<?php

namespace Printercurement\CatalogBundle\Controller;

use Printercurement\CatalogBundle\Renderer\Json;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogsController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $catalogs = $em->getRepository('CatalogBundle:Catalog')->findAll();

        return $this->render('CatalogBundle:Catalogs:catalogs.html.twig', array('catalogs' => $catalogs));
    }

    public function getCatalogsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $catalogs = $em->getRepository('CatalogBundle:Catalog')->findAll();

        $jsonRenderer = new Json();

        $jsonRenderer->assign('catalogs', $catalogs);
        
        return $jsonRenderer->render();
    }
}
