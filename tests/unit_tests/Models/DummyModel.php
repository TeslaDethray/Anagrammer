<?php

namespace TeslaDethray\Anagrammer\UnitTests\Models;

use TeslaDethray\Anagrammer\Models\Model;

class DummyModel extends Model
{
    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->$name;
    }
}