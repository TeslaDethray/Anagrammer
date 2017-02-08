<?php

namespace TeslaDethray\Anagrammer\UnitTests\Models;

use Doctrine\ORM\EntityManager;
use PHPUnit\Framework\TestCase;

class ModelTest extends TestCase
{
    /**
     * @var EntityManager
     */
    protected $entity_manager;
    /**
     * @var DummyModel
     */
    protected $model;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity_manager = $this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->model = new DummyModel();
        $this->model->setEntityManager($this->entity_manager);
    }

    public function testGetID()
    {
        $id = 'some id';
        $this->model->setProperties(compact('id'));
        $this->assertEquals($id, $this->model->getID());
    }

    public function testSerialize()
    {
        $id = 'some id';
        $member = new DummyModel();
        $member->setProperties(compact('id'));
        $this->model->setProperties(['id' => $id, 'member' => $member,]);

        $serialized = $this->model->serialize();
        $this->assertEquals($serialized['id'], $id);
        $this->assertEquals($serialized['member']['id'], $id);

    }

    public function testSetProperties()
    {
        $id = 'some id';
        $this->model->setProperties(compact('id'));
        $this->assertEquals($id, $this->model->id);
    }

    public function testSave()
    {
        $this->entity_manager->expects($this->once())
            ->method('persist')
            ->with($this->model);
        $this->entity_manager->expects($this->once())
            ->method('flush')
            ->with();

        $this->assertEquals($this->model, $this->model->save());
    }
}
