<?php

namespace Printercurement\EprocurementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogController extends Controller
{
    public function indexAction()
    {
        return $this->render('EprocurementBundle:Catalog:catalogs.html.twig');
    }

    public function createAction()
    {
        return $this->render('EprocurementBundle:Catalog:create.html.twig');
    }

    public function updateAction()
    {
        //
    }

    public function deleteAction()
    {
        //
    }

    public function getCatalogsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $catalogs = $em->getRepository('EprocurementBundle:Catalog')->findAll();

        return $this->getRenderer()
            ->assign('catalogs', $catalogs)
            ->render();
    }

    public function getCatalogAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $catalog = $em->getRepository('EprocurementBundle:Catalog')->find($id);

        return $this->render('EprocurementBundle:Catalog:catalog.html.twig', array('catalog' => $catalog));
    }
}
