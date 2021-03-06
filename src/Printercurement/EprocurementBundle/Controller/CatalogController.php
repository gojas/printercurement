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

    public function getCatalogsStructureAction($nodeId)
    {
        $em = $this->getDoctrine()->getManager();
        $catalogsStructure = $em->getRepository('EprocurementBundle:CatalogStructure')->findAll();

        return $this->getRenderer()
            ->assign('catalogsStructure', $catalogsStructure)
            ->render();
    }

    public function catalogAction(){
        return $this->render('EprocurementBundle:Catalog:catalog.html.twig');
    }

    public function getCatalogAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $catalog = $em->getRepository('EprocurementBundle:Catalog')->find($id);

        return $this->getRenderer()
            ->assign('catalog', $catalog)
            ->render();
    }
}
