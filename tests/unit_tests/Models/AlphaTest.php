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

    public function testSetProperties()
    {
        $char = 'z';

        $this->assertEquals($this->model, $this->model->setProperties($char));
        $this->assertEquals($char, $this->model->getName());
    }
}
