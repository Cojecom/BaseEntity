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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param int $id
     *
     * @return IncrementalIdBaseEntity
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    
    
   
    
}
