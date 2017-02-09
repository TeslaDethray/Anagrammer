<?php

namespace TeslaDethray\Anagrammer\UnitTests\Collections;

use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;
use League\Container\Container;
use PHPUnit\Framework\TestCase;
use TeslaDethray\Anagrammer\Collections\Alphas;
use TeslaDethray\Anagrammer\Collections\DummyQuery;
use TeslaDethray\Anagrammer\Collections\Words;
use TeslaDethray\Anagrammer\Models\Alpha;
use TeslaDethray\Anagrammer\Models\Word;
use TeslaDethray\Anagrammer\UnitTests\Models\DummyModel;

class AlphasTest extends TestCase
{
    /**
     * @var Alphas
     */
    protected $collection;
    /**
     * @var Container
     */
    protected $container;
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

        $this->container = $this->getMockBuilder(Container::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->entity_manager = $this->getMockBuilder(EntityManager::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->model = $this->getMockBuilder(Alpha::class)
            ->getMock();

        $this->collection = new Alphas();
        $this->collection->setEntityManager($this->entity_manager);
        $this->collection->setContainer($this->container);
    }

    public function testAnagram()
    {
        $string = 'abcde';
        foreach (str_split($string) as $char) {
            $alpha = $this->getMockBuilder(Alpha::class)->getMock();
            $alpha->method('isWildcard')->willReturn(false);
            $alpha->method('getPropertyName')->willReturn('alpha_01');
            $this->collection->add($alpha);
        }

        $query = $this->getMockBuilder(DummyQuery::class)
            ->disableOriginalConstructor()
            ->setMethods(['getResult', 'setMaxResults',])
            ->getMock();
        $words = $this->getMockBuilder(Words::class)
            ->setMethods(['get',])
            ->getMock();

        $this->entity_manager->expects($this->once())
            ->method('createQuery')
            ->willReturn($query);
        $this->container->expects($this->once())
            ->method('get')
            ->with(Words::class)
            ->willReturn($words);
        $query->expects($this->once())
            ->method('setMaxResults');
        $query->expects($this->once())
            ->method('getResult')
            ->willReturn([['id' => 0,], ['id' => 1,], ['id' => 2,],]);
        $word = $this->getMockBuilder(Word::class)
            ->getMock();
        $words->method('get')->willReturn([$word,]);

        for ($i = 0; $i > 2; $i++) {
            $words->expects($this->at($i))
                ->method('add')
                ->with($word);
        }

        $this->assertEquals($words, $this->collection->anagram());
    }

    public function testCountWildcards()
    {
        $string = 'abcde**';
        $count = 0;
        foreach (str_split($string) as $char) {
            $alpha = $this->getMockBuilder(Alpha::class)->getMock();
            $alpha->method('isWildcard')->willReturn(($char === '*'));
            $count += (integer)($char === '*');
            $this->collection->add($alpha);
        }

        $this->assertEquals($count, $this->collection->countWildcards());
    }
}
