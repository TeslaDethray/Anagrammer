<?php

namespace TeslaDethray\Anagrammer\UnitTests\Collections;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use PHPUnit\Framework\TestCase;
use TeslaDethray\Anagrammer\UnitTests\Models\DummyModel;

class CollectionTest extends TestCase
{
    /**
     * @var DummyCollection
     */
    protected $collection;
    /**
     * @var EntityManager
     */
    protected $entity_manager;
    /**
     * @var DummyModel
     */
    protected $model;

    public function setUp()
    {
        parent::setUp();

        $this->entity_manager = $this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->model = $this->getMockBuilder(DummyModel::class)
            ->getMock();

        $this->collection = new DummyCollection();
        $this->collection->setEntityManager($this->entity_manager);
    }

    public function testAll()
    {
        $this->assertEquals($this->mockAll(), $this->collection->all());
    }

    public function testSerialize()
    {
        $data = ['data', 'more data', 'other data',];
        $i = 0;
        foreach ($this->mockAll() as $model) {
            $model->expects($this->at($i++))
                ->method('serialize')
                ->with()
                ->willReturn($data);
        }

        $this->assertEquals([$data, $data, $data,], $this->collection->serialize());
    }

    protected function mockAll()
    {
        $models = [$this->model, $this->model, $this->model,];

        $repository = $this->getMockBuilder(EntityRepository::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->entity_manager->expects($this->once())
            ->method('getRepository')
            ->with($this->collection->collected_class)
            ->willReturn($repository);
        $repository->expects($this->once())
            ->method('findAll')
            ->with()
            ->willReturn($models);

        return $models;
    }
}
