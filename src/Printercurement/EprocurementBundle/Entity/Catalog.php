<?php

namespace Printercurement\EprocurementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="catalog")
 */
class Catalog
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

    protected $url_name;

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
}