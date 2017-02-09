<?php

namespace TeslaDethray\Anagrammer\Collections;

use TeslaDethray\Anagrammer\Models\Word;

/**
 * Class Words
 * @package TeslaDethray\Anagrammer\Collections
 */
class Words extends Collection
{
    /**
     * @var string
     */
    protected $collected_class = Word::class;
    /**
     * @var string[]
     */
    protected $searchable_fields = ['id', 'word',];
}
