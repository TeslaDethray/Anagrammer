<?php

namespace TeslaDethray\Anagrammer\Collections;

use TeslaDethray\Anagrammer\Friends\EntityManagerAwareInterface;
use TeslaDethray\Anagrammer\Friends\EntityManagerAwareTrait;
use TeslaDethray\Anagrammer\Models\Model;

/**
 * Class Collection
 * @package TeslaDethray\Anagrammer\Collections
 */
abstract class Collection implements EntityManagerAwareInterface
{
    use EntityManagerAwareTrait;

    /**
     * @var integer
     */
    public $id;
    /**
     * @var string
     */
    protected $collected_class = Model::class;
    /**
     * @var Model[]
     */
    protected $models;

    /**
     * @return Model[]
     */
    public function all()
    {
        if (!isset($this->models)) {
            $this->models = $this->getEntityManager()->getRepository($this->collected_class)->findAll();
        }
        return $this->models;
    }

    /**
     * @return array
     */
    public function serialize()
    {
        return array_map(
            function ($model) {
                return $model->serialize();
            },
            $this->all()
        );
    }
}
