#!/usr/bin/env php
<?php

include __DIR__ . '/../src/bootstrap.php';

try {
    $base_class = ucwords($argv[2]);
} catch (\ErrorException $e) {
    throw new \Exception('You must provide an action and a model name.');
}

$anagrammer = new \TeslaDethray\Anagrammer\Anagrammer($entity_manager);
$container = $anagrammer->getContainer();

switch (strtolower($argv[1])) {
    case 'add':
        foreach (getData($argv) as $value) {
            $target = $container->get("TeslaDethray\\Anagrammer\\Models\\$base_class");
            $target->setProperties($value)->save();
            echo "Created $base_class with ID " . $target->getID() . PHP_EOL;
        }
        break;
    case 'list':
        var_dump($container->get("TeslaDethray\\Anagrammer\\Collections\\$base_class")->serialize());
        break;
    case 'info':
        var_dump($container->get("TeslaDethray\\Anagrammer\\Collections\\$base_class")->get($argv[3]));
        break;
    default:
        throw new \Exception('Options are: add, list, info');
        break;
}

function getData(array $argv = [])
{
    if (empty($argv)) {
        throw new \Exception('No data was provided.');
    }

    $data = array_map(
        function ($entry) {
            if (is_null($data = json_decode($entry))) {
                return $entry;
            }
            return (array)$data;
        },
        array_splice($argv, 3)
    );

    return $data;
}
