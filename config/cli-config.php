<?php

require_once __DIR__ . '/bootstrap.php';

global $entityManager;

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);