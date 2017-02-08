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
     * @Column(type="string", length=1)
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
