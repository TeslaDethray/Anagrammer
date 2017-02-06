<?php

/**
 * This script runs Terminus. It does the following:
 *   - Includes the Composer autoload file
 *   - Starts a container with the input, output, application, and configuration objects
 *   - Starts a runner instance and runs the command
 *   - Exits with a status code
 */

if (file_exists($path = __DIR__ . '/../vendor/autoload.php')
    || file_exists($path = __DIR__ . '/../../autoload.php')
    || file_exists($path = __DIR__ . '/../../../autoload.php')
) {
    include_once($path);
} else {
    throw new \Exception('Could not locate autoload.php');
}

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$is_dev_mode = true;
$config = Setup::createAnnotationMetadataConfiguration([__DIR__,], $is_dev_mode);

$conn = [
    'driver' => 'pdo_sqlite',
    'path' => __DIR__ . '/../db.sqlite',
];

$entity_manager = EntityManager::create($conn, $config);
