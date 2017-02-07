#!/usr/bin/env php
<?php

include __DIR__ . '/../src/bootstrap.php';

try {
    $base_class = ucwords($argv[2]);
    $class = "TeslaDethray\\Anagrammer\\Models\\$base_class";
} catch (\ErrorException $e) {
    throw new \Exception('You must provide an action and a model name.');
}
switch (strtolower($argv[1])) {
    case 'add':
        foreach (getData($argv) as $value) {
            $model = new $class();
            if (method_exists($model, 'setEntityManager')) {
                $model->setEntityManager($entity_manager);
            }
            $model->setProperties($value);
            $entity_manager->persist($model);
            $entity_manager->flush();
            echo "Created $base_class with ID " . $model->getID() . PHP_EOL;
        }
        break;
    case 'list':
        $list = array_map(
            function ($model) {
                return $model->serialize();
            },
            $entity_manager->getRepository($class)->findAll()
        );
        var_dump($list);
        break;
    default:
        throw new \Exception('Options are: add');
        break;
}

function getData(array $argv = [])
{
    $data = array_map(
        function ($entry) {
            if (is_null($data = json_decode($entry))) {
                return $entry;
            }
            return (array)$data;
        },
        array_splice($argv, 3)
    );

    if (empty($data)) {
        throw new \Exception('No data was provided.');
    }

    return $data;
}
