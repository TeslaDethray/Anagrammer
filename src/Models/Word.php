<?php

namespace TeslaDethray\Anagrammer\Models;

use Doctrine\Common\Proxy\Exception\OutOfBoundsException;
use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use TeslaDethray\Anagrammer\Collections\Alphas;

/**
 * Class Word
 * @package TeslaDethray\Anagrammer
 * @Entity @Table(name="words")
 */
class Word extends Model implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var integer
     */
    protected $id;
    /**
     * @Column(type="string", length=15)
     * @var string
     */
    protected $word;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $length;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_01 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_02 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_03 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_04 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_05 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_06 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_07 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_08 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_09 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_10 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_11 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_12 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_13 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_14 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_15 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_16 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_17 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_18 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_19 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_20 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_21 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_22 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_23 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_24 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_25 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_26 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_27 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_28 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_29 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_30 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_31 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_32 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_33 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_34 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_35 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_36 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_37 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_38 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_39 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_40 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_41 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_42 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_43 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_44 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_45 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_46 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_47 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_48 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_49 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_50 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_51 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_52 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_53 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_54 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_55 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_56 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_57 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_58 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_59 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_60 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_61 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_62 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_63 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_64 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_65 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_66 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_67 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_68 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_69 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_70 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_71 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_72 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_73 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected $alpha_74 = 0;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_01 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_02 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_03 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_04 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_05 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_06 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_07 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_08 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_09 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_10 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_11 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_12 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_13 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_14 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected $loc_15 = null;

    /**
     * Returns the number of the given alphabetical character in this word.
     *
     * @param string $number Two-digit number relating to a word position
     * @return string
     */
    public function getCharacterInLocation($location)
    {
        return $this->getProperty('loc', $location);
    }

    /**
     * Returns the number of the given alphabetical character in this word.
     *
     * @param Alpha $alpha An Alpha object representing a character
     * @return integer
     */
    public function getNumberOfAlpha(Alpha $alpha)
    {
        return $this->getProperty('alpha', $alpha->getID());
    }

    public function getPointValue(array $alphas = [])
    {
        return null;
    }

    /**
     * @param Alphas $alphas
     * @return bool
     */
    public function isAnagramFor(Alphas $alphas)
    {
        foreach ($alphas->all() as $alpha) {
            $property = $alpha->getPropertyName();
            if ($this->$property > 0) {
                $this->$property--;
            }
        }
        $wildcard_sum = 0;
        for ($i = 1; $i <= 74; $i++) {
            $wildcard_sum += $this->getProperty('alpha', $i);
        }
        return ($alphas->countWildcards() >= $wildcard_sum);
    }

    /**
     * @inheritdoc
     */
    public function serialize()
    {
        return [
            'word' => $this->word,
            'point_value' => $this->getPointValue(),
        ];
    }

    /**
     * @param array $word
     * @return $this
     */
    public function setProperties($word)
    {
        $alphas = $this->getAlphaList();
        $i = 0;

        $this->word = $word;
        foreach (str_split($word) as $char) {
            $alpha = $alphas[$char];

            $count_property = 'alpha_' . sprintf('%02d', $alpha->getID());
            $location_property = 'loc_' . sprintf('%02d', ++$i);

            $this->$count_property++;
            $this->$location_property = $alpha;
        }
        $this->length = $i;
        return $this;
    }

    /**
     * @return array
     */
    protected function getAlphaList()
    {
        $alphas = [];
        foreach ($this->getAlphas()->all() as $alpha) {
            $alphas[$alpha->getName()] = $alpha;
        }
        return $alphas;
    }

    /**
     * @return Alphas
     */
    protected function getAlphas()
    {
        if (empty($this->alphas)) {
            $this->alphas = $this->getContainer()->get(Alphas::class);
        }
        return $this->alphas;
    }

    /**
     * @param $name
     * @param $value
     * @return mixed
     * @throws OutOfBoundsException When $this->$name_$value DNE
     */
    protected function getProperty($name, $value)
    {
        try {
            $property = $name . '_' . sprintf('%02d', $value);
            return $this->$property;
        } catch (\Exception $e) {
            throw new OutOfBoundsException("$name $value is not set.");
        }
    }
}
