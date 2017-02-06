#!/usr/bin/env php
<?php

require_once "bootstrap.php";

set_error_handler('exceptions_error_handler');

function exceptions_error_handler($severity, $message, $filename, $lineno) {
    if (error_reporting() == 0) {
        return;
    }
    if (error_reporting() & $severity) {
        throw new \ErrorException($message, 0, $severity, $filename, $lineno);
    }
}

try {
    $class = 'TeslaDethray\\Anagrammer\\' . ucwords($argv[1]);
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
    echo "Created $class with ID " . $model->getID() . PHP_EOL;
}

