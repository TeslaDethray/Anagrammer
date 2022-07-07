<?php

namespace TeslaDethray\Anagrammer\Collections;

use League\Container\ContainerAwareInterface;
use League\Container\ContainerAwareTrait;
use TeslaDethray\Anagrammer\Models\Word;

/**
 * Class Words
 * @package TeslaDethray\Anagrammer\Collections
 */
class Words extends Collection implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    /**
     * @var string
     */
    protected string $collected_class = Word::class;
    /**
     * @var string[]
     */
    protected array $searchable_fields = ['id', 'word',];
}
