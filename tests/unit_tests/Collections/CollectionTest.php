<?php

namespace TeslaDethray\Anagrammer\UnitTests\Collections;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use League\Container\Exception\NotFoundException;
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
    /**
     * @var EntityRepository
     */
    protected $repository;

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

    public function testAdd()
    {
        $model = $this->getMockBuilder(DummyModel::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->collection->add($model);

        $this->assertEquals([$model,], $this->collection->all());
    }

    public function testAll()
    {
        $this->assertEquals($this->mockAll(), $this->collection->all());
    }

    public function testGet()
    {
        $this->mockGetRepository();
        $id = 'some id';
        $result = ['anything that is not empty',];
        $i = 0;
        foreach ($this->collection->searchable_fields as $field) {
            $this->repository->expects($this->at($i++))
                ->method('findBy')
                ->with([$field => $id,])
                ->willReturn($result);
        }

        $id2 = 'invalid';
        foreach ($this->collection->searchable_fields as $field) {
            $this->repository->expects($this->at($i++))
                ->method('findBy')
                ->with([$field => $id2,])
                ->willReturn([]);
        }

        $this->assertEquals([$result[0], $result[0],], $this->collection->get($id));
        $this->expectException(NotFoundException::class);
        $this->expectExceptionMessage("Could not locate a(n) {$this->collection->collected_class} by $id2.");
        $this->assertNull($this->collection->get($id2));
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

    protected function mockGetRepository()
    {
        $this->repository = $this->getMockBuilder(EntityRepository::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->entity_manager->expects($this->once())
            ->method('getRepository')
            ->with($this->collection->collected_class)
            ->willReturn($this->repository);
    }

    protected function mockAll()
    {
        $models = [$this->model, $this->model, $this->model,];

        $this->mockGetRepository();
        $this->repository->expects($this->once())
            ->method('findAll')
            ->with()
            ->willReturn($models);

        return $models;
    }
}
