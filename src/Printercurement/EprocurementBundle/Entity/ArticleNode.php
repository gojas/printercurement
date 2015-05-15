<?php

namespace Printercurement\EprocurementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="article_node")
 */
class ArticleNode
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $node_id;

    /**
     * @var integer
     */
    protected $article_id;

    /**
     * @var \DateTime
     */
    protected $dt_created;

    /**
     * Get node_id
     *
     * @return integer 
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * Set article_id
     *
     * @param integer $articleId
     * @return ArticleNode
     */
    public function setArticleId($articleId)
    {
        $this->article_id = $articleId;

        return $this;
    }

    /**
     * Get article_id
     *
     * @return integer 
     */
    public function getArticleId()
    {
        return $this->article_id;
    }

    /**
     * Set dt_created
     *
     * @param \DateTime $dtCreated
     * @return ArticleNode
     */
    public function setDtCreated($dtCreated)
    {
        $this->dt_created = $dtCreated;

        return $this;
    }

    /**
     * Get dt_created
     *
     * @return \DateTime 
     */
    public function getDtCreated()
    {
        return $this->dt_created;
    }
}
