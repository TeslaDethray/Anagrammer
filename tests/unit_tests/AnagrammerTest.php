<?php

namespace TeslaDethray\Anagrammer\UnitTests;

use Doctrine\ORM\EntityManager;
use League\Container\Container;
use PHPUnit\Framework\TestCase;
use TeslaDethray\Anagrammer\Anagrammer;

class AnagrammerTest extends TestCase
{
    /**
     * @var EntityManager
     */
    protected $entity_manager;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();

        $this->entity_manager = $this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testConfiguration()
    {
        $anagrammer = new Anagrammer($this->entity_manager);
        $container = $anagrammer->getContainer();
        $this->assertInstanceOf(Container::class, $container);
    }
}
