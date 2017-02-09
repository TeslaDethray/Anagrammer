<?php

namespace TeslaDethray\Anagrammer\Models;

/**
 * Class Alpha
 * @package TeslaDethray\Anagrammer
 * @Entity @Table(name="alphas")
 */
class Alpha extends Model
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var integer
     */
    protected $id;
    /**
     * @Column(type="string", length=1, unique=true)
     * @var string
     */
    protected $name;
    /**
     * @Column(type="integer", nullable=true)
     * @var integer
     */
    protected $point_value = 0;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getPointValue()
    {
        return $this->point_value;
    }

    /**
     * @return string
     */
    public function getPropertyName()
    {
        return 'alpha_' . sprintf('%02d', $this->getID());
    }

    /**
     * @return boolean
     */
    public function isWildcard()
    {
        return ($this->getName() === '*');
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setProperties($name)
    {
        $this->name = "$name";
        return $this;
    }
}
