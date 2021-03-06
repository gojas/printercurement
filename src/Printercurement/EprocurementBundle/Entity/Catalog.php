<?php

namespace Printercurement\EprocurementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Printercurement\CoreBundle\Entity\AbstractEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="catalog")
 */
class Catalog extends AbstractEntity
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=45)
     */
    protected $name;

    /**
     * @ORM\Column(type="integer")
     */
    protected $created_by;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $dt_created;

    /**
     * @var
     */
    protected $url_name;

    /**
     * @ORM\OneToMany(targetEntity="CatalogStructure", mappedBy="catalog")
     **/
    protected $catalogStructures;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Catalog
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set created_by
     *
     * @param integer $createdBy
     * @return Catalog
     */
    public function setCreatedBy($createdBy)
    {
        $this->created_by = $createdBy;

        return $this;
    }

    /**
     * Get created_by
     *
     * @return integer
     */
    public function getCreatedBy()
    {
        return $this->created_by;
    }

    /**
     * Set dt_created
     *
     * @param \DateTime $dtCreated
     * @return Catalog
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

    /**
     * Set url_name
     *
     * @param string $urlName
     * @return string
     */
    public function setUrlName($urlName)
    {
        $this->url_name = $this->createUrlName($urlName);

        return $this;
    }

    /**
     * Get url name
     *
     * @return string
     */
    public function getUrlName()
    {
        $url_name = $this->createUrlName();

        return $url_name;
    }

    private function createUrlName()
    {
        return preg_replace("/[^A-Za-z0-9s+]/", '-', $this->name);
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->catalogStructures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add catalogStructures
     *
     * @param \Printercurement\EprocurementBundle\Entity\CatalogStructure $catalogStructures
     * @return Catalog
     */
    public function addCatalogStructure(\Printercurement\EprocurementBundle\Entity\CatalogStructure $catalogStructures)
    {
        $this->catalogStructures[] = $catalogStructures;

        return $this;
    }

    /**
     * Remove catalogStructures
     *
     * @param \Printercurement\EprocurementBundle\Entity\CatalogStructure $catalogStructures
     */
    public function removeCatalogStructure(\Printercurement\EprocurementBundle\Entity\CatalogStructure $catalogStructures)
    {
        $this->catalogStructures->removeElement($catalogStructures);
    }

    /**
     * Get catalogStructures
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCatalogStructures()
    {
        return $this->catalogStructures;
    }
}
