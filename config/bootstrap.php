<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$configuration = Setup::createAnnotationMetadataConfiguration(
    [__DIR__. '/../source'],
    true
);

$connection = [
    'driver' => 'pdo_sqlite',
    'path'   => __DIR__ . '/../db/db.sqlite'
];

$entityManager = EntityManager::create($connection, $configuration);