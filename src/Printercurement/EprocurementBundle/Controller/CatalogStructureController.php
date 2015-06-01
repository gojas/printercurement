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

        $nodes = array();
        foreach($catalogsStructure as $structure){
            $prepareStructure = array();
            $prepareStructure['node_id'] = $structure->getNodeId();
            $prepareStructure['parent_node_id'] = $structure->getParentNodeId();
            $prepareStructure['catalog'] = $structure->getCatalog();

            $prepareStructure['has_children_nodes'] = false;
            foreach($structure->getNodes() as $node){
                $prepareChildNode = array();
                $prepareStructure['has_children_nodes'] = true;



                $prepareChildNode['node_id'] = $node->getNodeId();
                $prepareChildNode['parent_node_id'] = $node->getParentNodeId();
                $prepareChildNode['catalog'] = $node->getCatalog();

                //TESTING

                $prepareChildNode['child_nodes'] = array();
                $prepareChildNode['has_children_nodes'] = true;

                //TESTING

                $prepareStructure['child_nodes'][] = $prepareChildNode;

            }

            $nodes[] = $prepareStructure;
        }

        return $this->getRenderer()
            ->assign('catalogsStructure', $nodes)
            ->render();
    }
}
