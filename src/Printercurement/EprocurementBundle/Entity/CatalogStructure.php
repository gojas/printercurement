<?php

namespace Printercurement\EprocurementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="catalog_structure")
 */
class CatalogStructure
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
}
