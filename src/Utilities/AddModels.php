<?php

require_once __DIR__ . '/../bootstrap.php';

try {
    $base_class = ucwords($argv[1]);
    $class = "TeslaDethray\\Anagrammer\\Models\\$base_class";
} catch (\ErrorException $e) {
    throw new \Exception('No model name was provided');
}

$additions = array_map(
    function ($entry) {
        if (is_null($data = json_decode($entry))) {
            return $entry;
        }
        return (array)$data;
    },
    array_splice($argv, 2)
);

foreach ($additions as $value) {
    $model = new $class($value);
    $entity_manager->persist($model);
    $entity_manager->flush();
    echo "Created $base_class with ID " . $model->getID() . PHP_EOL;
}

