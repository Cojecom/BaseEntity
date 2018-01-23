<?php


namespace BaseEntityBundle\Entity;


interface BaseEntityInterface
{
    
    public function getId();
    public function setId($id);
    
    public function getCreated();
    public function setCreated(\DateTime $created);
    
    public function getModified();
    public function setModified(\DateTime $modified);
    
}