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
    public int $id;
    /**
     * @var string
     */
    protected string $collected_class = Model::class;
    /**
     * @var Model[]
     */
    protected array $models = [];
    /**
     * @var EntityRepository
     */
    protected EntityRepository $repository;
    /**
     * @var string[]
     */
    protected array $searchable_fields = ['id',];

    /**
     * @param Model $alpha
     */
    public function add(Model $alpha) : void
    {
        $this->models[] = $alpha;
    }

    /**
     * @return Model[]
     */
    public function all() : array
    {
        if (empty($this->models)) {
            $this->models = $this->getRepository()->findAll();
        }
        return $this->models;
    }

    /**
     * @param string $id
     * @return Model The matched model
     * @throws NotFoundException When no matches are made
     * @throws \Exception When more than one match is made
     */
    public function get(string $id) : Model
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
            throw new \Exception("$id yielded more than one result.");
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
    protected function getRepository() : EntityRepository
    {
        if (empty($this->repository)) {
            $this->repository = $this->getEntityManager()->getRepository($this->collected_class);
        }
        return $this->repository;
    }
}
