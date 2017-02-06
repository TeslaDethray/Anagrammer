<?php

namespace TeslaDethray\Anagrammer;

abstract class Model
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var integer
     * This needs to be added to every model for the proper functioning of the ORM.
     */
    protected $id;

    /**
     * Model constructor.
     *
     * @param array $properties
     */
    public function __construct($properties = [])
    {
        $this->setProperties($properties);
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->id;
    }

    /**
     * @param array $properties
     */
    protected function setProperties($properties)
    {
        foreach ($properties as $name => $value) {
            $this->$name = $value;
        }
    }
}
