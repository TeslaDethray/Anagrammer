<?php

namespace TeslaDethray\Anagrammer\Collections;

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use TeslaDethray\Anagrammer\Models\Alpha;
use TeslaDethray\Anagrammer\Models\Word;

/**
 * Class Alphas
 * @package TeslaDethray\Anagrammer\Collections
 */
class Alphas extends Collection implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * @var string
     */
    protected $collected_class = Alpha::class;
    /**
     * @var string[]
     */
    protected $searchable_fields = ['id', 'name',];

    /**
     * @return Words
     */
    public function anagram()
    {
        $num_wildcards = $this->countWildcards();
        $criteria = [];
        for ($i = 1; $i <= 27; $i++) {
            $criteria['alpha_' . sprintf('%02d', $i)] = $num_wildcards;
        }
        foreach ($this->models as $alpha) {
            $criteria[$alpha->getPropertyName()]++;
        }
        foreach ($criteria as $column => $criterion) {
            $criteria[$column] = "w.$column <= $criterion";
        }

        $sql = 'SELECT w.id FROM ' . Word::class . ' w WHERE '. implode(' AND ', $criteria) . ' AND w.length <= ' . count($this->models);
        $query = $this->getEntityManager()->createQuery($sql);
        $query->setMaxResults(100);
        $words = $this->getContainer()->get(Words::class);
        foreach ($query->getResult() as $word_id) {
            $word = $words->get($word_id['id']);
            $word = array_shift($word);
            if (($num_wildcards === 0) || $word->isAnagramFor($this)) {
                $words->add($word);
            }
        }
        return $words;
    }

    /**
     * @return int
     */
    public function countWildcards()
    {
        $wildcards = 0;
        foreach ($this->models as $alpha) {
            $wildcards += (integer)$alpha->isWildcard();
        }
        return $wildcards;
    }
}
