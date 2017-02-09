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
    /**
     * @var string[]
     */
    protected $searchable_fields = ['id', 'other',];

    public function __get($name)
    {
        return $this->$name;
    }
}
