<?php

namespace TeslaDethray\Anagrammer\UnitTests\Models;

use Doctrine\Common\Proxy\Exception\OutOfBoundsException;
use League\Container\ContainerInterface;
use PHPUnit\Framework\TestCase;
use TeslaDethray\Anagrammer\Collections\Alphas;
use TeslaDethray\Anagrammer\Models\Alpha;
use TeslaDethray\Anagrammer\Models\Word;

/**
 * Class WordTest
 * Testing class for TeslaDethray\Anagrammer\Models\Word
 * @package TeslaDethray\Anagrammer\UnitTests\Models
 */
class WordTest extends TestCase
{
    /**
     * @var Alphas
     */
    protected $alphas;
    /**
     * @var ContainerInterface
     */
    protected $container;
    /**
     * @var Word
     */
    protected $model;

    const ALPHABET = 'abcdefghijklmnopqrstuvwxyz';
    const MAX_ALPHABET_LENGTH = 74;

    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();

        $this->alphas = $this->getMockBuilder(Alphas::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->container = $this->getMockBuilder(ContainerInterface::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->model = new Word();
        $this->model->setContainer($this->container);
    }

    public function testSetProperties()
    {
        $word = 'somewordnospace';

        $alphas = $this->mockGetAlphaList();

        $this->container->expects($this->once())
            ->method('get')
            ->with(Alphas::class)
            ->willReturn($this->alphas);

        $this->assertEquals($this->model, $this->model->setProperties($word));

        $i = 0;
        foreach (str_split($word) as $char) {
            $this->assertEquals($char, $this->model->getCharacterInLocation(++$i)->getName());
        }

        $expected = [
            1 => 1, //a
            3 => 1, //c
            4 => 1, //d
            5 => 2, //e
            13 => 1, //m
            14 => 1, //n
            15 => 3, //o
            16 => 1, //p
            18 => 1, //r
            19 => 2, //s
            23 => 1, //w
        ];
        for ($j = 1; $j <= 26; $j++) {
            $this->assertEquals(
                isset($expected[$j]) ? $expected[$j] : 0,
                $this->model->getNumberOfAlpha($alphas[($j - 1)])
            );
        }

        $number = 42;
        $this->expectException(OutOfBoundsException::class);
        $this->expectExceptionMessage("loc $number is not set.");
        $this->model->getCharacterInLocation(42);
    }

    protected function mockGetAlphaList()
    {
        $alphas = [];
        $i = 0;
        foreach (str_split(self::ALPHABET) as $char) {
            $alpha = $this->getMockBuilder(Alpha::class)
                ->disableOriginalConstructor()
                ->setMethods(['getName', 'getID',])
                ->getMock();
            $alpha->method('getName')
                ->with()
                ->willReturn($char);
            $alpha->method('getID')
                ->with()
                ->willReturn(++$i);
            $alphas[] = $alpha;
        }

        $this->alphas->expects($this->once())
            ->method('all')
            ->with()
            ->willReturn($alphas);
        return $alphas;
    }

}
