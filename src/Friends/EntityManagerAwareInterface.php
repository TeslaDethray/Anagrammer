<?php

namespace TeslaDethray\Anagrammer\Friends;

use Doctrine\ORM\EntityManager;

interface EntityManagerAwareInterface
{
    /**
     * Return the EntityManager object.
     *
     * @return EntityManager
     */
    public function getEntityManager() : EntityManager;

    /**
     * Inject a pre-configured Entity Manager object.
     *
     * @param EntityManager $entity_manager
     * @return void
     */
    public function setEntityManager(EntityManager $entity_manager) : void;
}
