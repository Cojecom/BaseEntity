<?php

namespace BaseEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseEntity
 */
class UuidBaseEntity extends BaseEntityWithoutId
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     */
    protected $id;
    
    

    public function __construct($id)
    {
        parent::__construct();
        $this->id = $id;
    }
    
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
     * Get id
     * @param string $id
     * @return UuidBaseEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    
}
