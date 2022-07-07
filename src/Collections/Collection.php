<?php

namespace TeslaDethray\Anagrammer\Collections;

use Doctrine\ORM\EntityRepository;
use League\Container\Exception\NotFoundException;
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
    protected $models = [];
    /**
     * @var EntityRepository
     */
    protected $repository;
    /**
     * @var string[]
     */
    protected $searchable_fields = ['id',];

    /**
     * @param Model $alpha
     */
    public function add(Model $alpha)
    {
        $this->models[] = $alpha;
    }

    /**
     * @return Model[]
     */
    public function all()
    {
        if (empty($this->models)) {
            $this->models = $this->getRepository()->findAll();
        }
        return $this->models;
    }

    /**
     * @param string $id
     * @return Model|array
     * @throws NotFoundException
     */
    public function get(string $id) : Model|array
    {
        $results = [];
        foreach ($this->searchable_fields as $field) {
            $result = $this->getRepository()->findBy([$field => $id,]);
            if (is_array($result)) {
                $results = array_merge($results, $result);
            }
        }
        if (empty($results)) {
            throw new NotFoundException("Could not locate a(n) {$this->collected_class} by $id.");
        }
        if (count($results) > 1) {
            throw new Exception("$id yielded more than one result.");
        }
        return array_shift($results);
    }

    /**
     * @return array
     */
    public function serialize() : array
    {
        return array_map(
            function ($model) {
                return $model->serialize();
            },
            $this->all()
        );
    }

    /**
     * @return EntityRepository
     */
    protected function getRepository()
    {
        if (empty($this->repository)) {
            $this->repository = $this->getEntityManager()->getRepository($this->collected_class);
        }
        return $this->repository;
    }
}
