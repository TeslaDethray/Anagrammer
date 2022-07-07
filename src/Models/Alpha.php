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
    protected int $id;
    /**
     * @Column(type="string", length=1, unique=true)
     * @var string
     */
    protected string $name;
    /**
     * @Column(type="integer", nullable=true)
     * @var integer
     */
    protected int $point_value = 0;

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getPointValue() : int
    {
        return $this->point_value;
    }

    /**
     * @return string
     */
    public function getPropertyName() : string
    {
        return 'alpha_' . sprintf('%02d', $this->getID());
    }

    /**
     * @return boolean
     */
    public function isWildcard() : bool
    {
        return ($this->getName() === '*');
    }

    /**
     * @param string $name
     * @return Alpha $this
     */
    public function setProperties($name) : Alpha
    {
        $this->name = "$name";
        return $this;
    }
}
