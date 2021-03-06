<?php

namespace Printercurement\EprocurementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Printercurement\CoreBundle\Entity\AbstractEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="catalog_structure")
 */
class CatalogStructure extends AbstractEntity
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $node_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $parent_node_id;

    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\NotBlank()
     */
    private $catalog_id;

    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\NotBlank()
     */
    private $company_id;

    /**
     * @ORM\Column(type="integer")
     *
     * @Assert\NotBlank()
     */
    private $user_id;

    /**
     * @ORM\OneToMany(targetEntity="CatalogStructure", mappedBy="parentNode")
     **/
    protected  $nodes;

    /**
     * @ORM\ManyToOne(targetEntity="CatalogStructure", inversedBy="nodes")
     * @ORM\JoinColumn(name="parent_node_id", referencedColumnName="node_id")
     **/
    protected $parentNode;

    /**
     * @ORM\ManyToOne(targetEntity="Catalog")
     * @ORM\JoinColumn(name="catalog_id", referencedColumnName="id")
     **/
    protected $catalog;

    /**
     * @ORM\OneToMany(targetEntity="ArticleNode", mappedBy="catalogNode")
     **/
    protected  $articleNodes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nodes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set parent_node_id
     *
     * @param integer $parentNodeId
     * @return CatalogStructure
     */
    public function setParentNodeId($parentNodeId)
    {
        $this->parent_node_id = $parentNodeId;

        return $this;
    }

    /**
     * Get parent_node_id
     *
     * @return integer 
     */
    public function getParentNodeId()
    {
        return $this->parent_node_id;
    }

    /**
     * Set catalog_id
     *
     * @param integer $catalogId
     * @return CatalogStructure
     */
    public function setCatalogId($catalogId)
    {
        $this->catalog_id = $catalogId;

        return $this;
    }

    /**
     * Get catalog_id
     *
     * @return integer 
     */
    public function getCatalogId()
    {
        return $this->catalog_id;
    }

    /**
     * Set company_id
     *
     * @param integer $companyId
     * @return CatalogStructure
     */
    public function setCompanyId($companyId)
    {
        $this->company_id = $companyId;

        return $this;
    }

    /**
     * Get company_id
     *
     * @return integer 
     */
    public function getCompanyId()
    {
        return $this->company_id;
    }

    /**
     * Set user_id
     *
     * @param integer $userId
     * @return CatalogStructure
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Add nodes
     *
     * @param \Printercurement\EprocurementBundle\Entity\CatalogStructure $nodes
     * @return CatalogStructure
     */
    public function addNode(\Printercurement\EprocurementBundle\Entity\CatalogStructure $nodes)
    {
        $this->nodes[] = $nodes;

        return $this;
    }

    /**
     * Remove nodes
     *
     * @param \Printercurement\EprocurementBundle\Entity\CatalogStructure $nodes
     */
    public function removeNode(\Printercurement\EprocurementBundle\Entity\CatalogStructure $nodes)
    {
        $this->nodes->removeElement($nodes);
    }

    /**
     * Get nodes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * Set parentNode
     *
     * @param \Printercurement\EprocurementBundle\Entity\CatalogStructure $parentNode
     * @return CatalogStructure
     */
    public function setParentNode(\Printercurement\EprocurementBundle\Entity\CatalogStructure $parentNode = null)
    {
        $this->parentNode = $parentNode;

        return $this;
    }

    /**
     * Get parentNode
     *
     * @return \Printercurement\EprocurementBundle\Entity\CatalogStructure 
     */
    public function getParentNode()
    {
        return $this->parentNode;
    }

    /**
     * Set catalog
     *
     * @param \Printercurement\EprocurementBundle\Entity\Catalog $catalog
     * @return CatalogStructure
     */
    public function setCatalog(\Printercurement\EprocurementBundle\Entity\Catalog $catalog = null)
    {
        $this->catalog = $catalog;

        return $this;
    }

    /**
     * Get catalog
     *
     * @return \Printercurement\EprocurementBundle\Entity\Catalog 
     */
    public function getCatalog()
    {
        return $this->catalog;
    }

    /**
     * Add articleNodes
     *
     * @param \Printercurement\EprocurementBundle\Entity\ArticleNode $articleNodes
     * @return CatalogStructure
     */
    public function addArticleNode(\Printercurement\EprocurementBundle\Entity\ArticleNode $articleNodes)
    {
        $this->articleNodes[] = $articleNodes;

        return $this;
    }

    /**
     * Remove articleNodes
     *
     * @param \Printercurement\EprocurementBundle\Entity\ArticleNode $articleNodes
     */
    public function removeArticleNode(\Printercurement\EprocurementBundle\Entity\ArticleNode $articleNodes)
    {
        $this->articleNodes->removeElement($articleNodes);
    }

    /**
     * Get articleNodes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticleNodes()
    {
        return $this->articleNodes;
    }
}
