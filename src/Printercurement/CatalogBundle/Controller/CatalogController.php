<?php

namespace Printercurement\CatalogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CatalogController extends Controller
{
    public function indexAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $catalog = $em->getRepository('CatalogBundle:Catalog')->find($id);

        return $this->render('CatalogBundle:Catalog:catalog.html.twig', array('catalog' => $catalog));
    }

    public function createAction()
    {
        return $this->render('CatalogBundle:Catalog:create.html.twig');
    }

    public function doCreateAction(Request $request)
    {
        return $this->render('CatalogBundle:Catalog:create.html.twig');
    }
}
