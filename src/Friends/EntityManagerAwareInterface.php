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
    public function getEntityManager();

    /**
     * Inject a pre-configured Entity Manager object.
     *
     * @param EntityManager $entity_manager
     * @return mixed
     */
    public function setEntityManager(EntityManager $entity_manager);
}
