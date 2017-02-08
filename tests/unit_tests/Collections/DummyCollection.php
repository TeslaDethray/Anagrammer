<?php

namespace TeslaDethray\Anagrammer\UnitTests\Collections;

use TeslaDethray\Anagrammer\Collections\Collection;
use TeslaDethray\Anagrammer\UnitTests\Models\DummyModel;

class DummyCollection extends Collection
{
    /**
     * @var string
     */
    protected $collected_class = DummyModel::class;

    public function __get($name)
    {
        return $this->$name;
    }
}
