<?php

namespace TeslaDethray\Anagrammer\Models;

use TeslaDethray\Anagrammer\Friends\EntityManagerAwareInterface;
use TeslaDethray\Anagrammer\Friends\EntityManagerAwareTrait;

/**
 * Class Model
 * @package TeslaDethray\Anagrammer\Models
 */
abstract class Model implements EntityManagerAwareInterface
{
    use EntityManagerAwareTrait;

    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var integer
     * This needs to be added to every model for the proper functioning of the ORM.
     */
    protected $id;

    /**
     * @return int
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function serialize()
    {
        $properties = [];
        foreach (get_object_vars($this) as $name => $value) {
            if (is_object($value) && method_exists($value, 'serialize')) {
                $value = $value->serialize();
            }
            $properties[$name] = $value;
        }
        return $properties;
    }

    /**
     * @param mixed $properties
     * @return $this
     */
    public function setProperties($properties)
    {
        foreach ($properties as $name => $value) {
            $this->$name = $value;
        }
        return $this;
    }

    /**
     * @return $this
     */
    public function save()
    {
        $entity_manager = $this->getEntityManager();
        $entity_manager->persist($this);
        $entity_manager->flush();
        return $this;
    }
}
