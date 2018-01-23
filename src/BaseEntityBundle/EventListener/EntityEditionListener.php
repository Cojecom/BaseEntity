<?php

namespace Cojecom\BaseEntityBundle\EventListener;

use Cojecom\BaseEntityBundle\Entity\BaseEntityInterface;
use Doctrine\ORM\Event\LifecycleEventArgs;

class EntityEditionListener
{
    public function preUpdate(LifecycleEventArgs $args)
    {
        $entity = $args->getObject();
        
        if($entity instanceof BaseEntityInterface) {
            $entity->setModified(new \DateTime());
        }
    }
}