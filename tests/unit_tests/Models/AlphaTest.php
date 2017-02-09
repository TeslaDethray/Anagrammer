<?php

namespace TeslaDethray\Anagrammer\UnitTests\Models;

use PHPUnit\Framework\TestCase;
use TeslaDethray\Anagrammer\Models\Alpha;

/**
 * Class AlphaTest
 * Testing class for TeslaDethray\Anagrammer\Models\Alpha
 * @package TeslaDethray\Anagrammer\UnitTests\Models
 */
class AlphaTest extends TestCase
{
    /**
     * @inheritdoc
     */
    public function setUp()
    {
        parent::setUp();
        $this->model = new Alpha();
    }

    public function testGetName()
    {
        $char = 'q';
        $this->model->setProperties($char);
        $this->assertEquals($char, $this->model->getName());
    }

    public function testGetPointValue()
    {
        $this->assertInternalType('integer', $this->model->getPointValue());
    }

    public function testGetPropertyName()
    {
        $expected = "alpha_00";
        $this->assertEquals($expected, $this->model->getPropertyName());
    }

    public function testIsWildcard()
    {
        $this->model->setProperties('*');
        $this->assertTrue($this->model->isWildcard());

        $this->model->setProperties('a');
        $this->assertFalse($this->model->isWildcard());
    }

    public function testSetProperties()
    {
        $char = 'z';
        $this->assertEquals($this->model, $this->model->setProperties($char));
        $this->assertEquals($char, $this->model->getName());
    }
}
