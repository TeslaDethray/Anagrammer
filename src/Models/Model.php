<?php

namespace TeslaDethray\Anagrammer\Models;

abstract class Model
{
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
     * @param array $properties
     */
    public function setProperties($properties)
    {
        foreach ($properties as $name => $value) {
            $this->$name = $value;
        }
    }
}
