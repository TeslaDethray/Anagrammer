<?php

namespace TeslaDethray\Anagrammer\Collections;

use TeslaDethray\Anagrammer\Models\Alpha;

/**
 * Class Alphas
 * @package TeslaDethray\Anagrammer\Collections
 */
class Alphas extends Collection
{
    /**
     * @var string
     */
    protected $collected_class = Alpha::class;
    /**
     * @var string[]
     */
    protected $searchable_fields = ['id', 'name',];
}
