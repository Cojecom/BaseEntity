<?php

namespace Cojecom\BaseEntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BaseEntity
 */
class IncrementalIdBaseEntity extends BaseEntityWithoutId
{
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    

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
     *
     * @param $id
     *
     * @return IncrementalIdBaseEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    
    
   
    
}
