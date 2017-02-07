<?php

namespace TeslaDethray\Anagrammer\Friends;

use Doctrine\ORM\EntityManager;

trait EntityManagerAwareTrait
{
    /**
     * @var EntityManager
     */
    protected $entity_manager;

    /**
     * Return the Entity Manager object.
     *
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->entity_manager;
    }

    /**
     * Inject a pre-configured Entity Manager object.
     *
     * @param EntityManager $entity_manager
     * @return mixed
     */
    public function setEntityManager(EntityManager $entity_manager)
    {
        $this->entity_manager = $entity_manager;
    }
}
