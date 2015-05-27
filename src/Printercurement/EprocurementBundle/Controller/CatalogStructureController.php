<?php

namespace Printercurement\EprocurementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CatalogStructureController extends Controller
{
    public function indexAction()
    {
        return $this->render('EprocurementBundle:CatalogStructure:structure.html.twig');
    }

    public function createAction()
    {
        return $this->render('EprocurementBundle:CatalogStructure:create.html.twig');
    }

    public function updateAction()
    {
        //
    }

    public function deleteAction()
    {
        //
    }

    public function getCatalogsStructureAction($nodeId)
    {
        if($nodeId == 0){
            $nodeId = NULL;
        }

        $em = $this->getDoctrine()->getManager();
        $catalogsStructure = $em->getRepository('EprocurementBundle:CatalogStructure')->findBy(
            array('parent_node_id' => $nodeId)
        );

        return $this->getRenderer()
            ->assign('catalogsStructure', $catalogsStructure)
            ->render();
    }
}
