<?php

namespace Printercurement\CatalogBundle\Controller;

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

        $jsonResponse = array();
        foreach($catalogs as $catalog){
            $jsonResponse[] = $this->getSerializer()->serialize($catalog, 'json');
        }

        return new JsonResponse(array('catalogs' => $jsonResponse));
    }
}
