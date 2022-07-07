<?php

namespace TeslaDethray\Anagrammer\Friends;

use Doctrine\ORM\EntityManager;

trait EntityManagerAwareTrait
{
    /**
     * @var EntityManager
     */
    protected EntityManager $entity_manager;

    /**
     * Return the Entity Manager object.
     *
     * @return EntityManager
     */
    public function getEntityManager() : EntityManager
    {
        return $this->entity_manager;
    }

    /**
     * Inject a pre-configured Entity Manager object.
     *
     * @param EntityManager $entity_manager
     * @return void
     */
    public function setEntityManager(EntityManager $entity_manager) : void
    {
        $this->entity_manager = $entity_manager;
    }
}
