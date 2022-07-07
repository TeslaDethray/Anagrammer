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
    protected int $id;
    /**
     * @Column(type="string", length=15)
     * @var string
     */
    protected string $word;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $length;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_01 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_02 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_03 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_04 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_05 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_06 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_07 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_08 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_09 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_10 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_11 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_12 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_13 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_14 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_15 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_16 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_17 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_18 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_19 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_20 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_21 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_22 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_23 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_24 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_25 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_26 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_27 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_28 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_29 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_30 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_31 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_32 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_33 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_34 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_35 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_36 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_37 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_38 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_39 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_40 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_41 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_42 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_43 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_44 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_45 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_46 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_47 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_48 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_49 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_50 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_51 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_52 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_53 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_54 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_55 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_56 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_57 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_58 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_59 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_60 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_61 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_62 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_63 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_64 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_65 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_66 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_67 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_68 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_69 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_70 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_71 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_72 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_73 = 0;
    /**
     * @Column(type="integer")
     * @var integer
     */
    protected int $alpha_74 = 0;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_01 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_02 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_03 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_04 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_05 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_06 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_07 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_08 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_09 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_10 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_11 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_12 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_13 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_14 = null;
    /**
     * @ManyToOne(targetEntity="Alpha")
     */
    protected ?Alpha $loc_15 = null;

    /**
     * Returns the number of the given alphabetical character in this word.
     *
     * @param string $number Two-digit number relating to a word position
     * @return string
     */
    public function getCharacterInLocation($location) : string
    {
        return $this->getProperty('loc', $location);
    }

    /**
     * Returns the number of the given alphabetical character in this word.
     *
     * @param Alpha $alpha An Alpha object representing a character
     * @return integer
     */
    public function getNumberOfAlpha(Alpha $alpha) : int
    {
        return $this->getProperty('alpha', $alpha->getID());
    }

    public function getPointValue() : int
    {
        $alphas = [];
        for($i = 1 ; $i <= 15 ; $i++) {
            $alphas[] = $this->{'loc_' . sprintf('%02d', $i)};
        }
        return self::calculatePointValue($alphas);
    }

    /**
     * @param Alphas $alphas
     * @return bool
     */
    public function isAnagramFor(Alphas $alphas) : bool
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
    public function serialize() : array
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
    public function setProperties($word) : Word
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
     * @param array $alphas
     * @return integer
     */
    public static function calculatePointValue(array $alphas = []) : int
    {
        return array_reduce($alphas, function ($carry, $alpha) {
            if ($alpha !== null) $carry += $alpha->getPointValue();
            return $carry;
        });
    }

    /**
     * @return array
     */
    protected function getAlphaList() : array
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
    protected function getAlphas() : array
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
    protected function getProperty($name, $value) : mixed
    {
        try {
            $property = $name . '_' . sprintf('%02d', $value);
            return $this->$property;
        } catch (\Exception $e) {
            throw new OutOfBoundsException("$name $value is not set.");
        }
    }
}
