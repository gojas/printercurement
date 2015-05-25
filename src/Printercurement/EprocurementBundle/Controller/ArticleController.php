<?php

namespace Printercurement\EprocurementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render('EprocurementBundle:Article:articles.html.twig');
    }

    public function createAction()
    {
        return $this->render('EprocurementBundle:Article:create.html.twig');
    }

    public function updateAction()
    {
        //
    }

    public function deleteAction()
    {
        //
    }

    public function getArticlesAction($catalogNodeId)
    {
        $em = $this->getDoctrine()->getManager();

        $articlesUnderNode = $em->getRepository('EprocurementBundle:ArticleNode')->findBy(
            array(
                'node_id' => $catalogNodeId
            )
        );

        return $this->getRenderer()
            ->assign('articles', $articlesUnderNode)
            ->render();
    }

    public function getArticleAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $article = $em->getRepository('EprocurementBundle:Article')->find($id);

        return $this->render('EprocurementBundle:Article:article.html.twig', array('article' => $article));
    }
}
