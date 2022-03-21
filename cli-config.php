<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Faculdade\Infra\EntityManagerCreator;

require __DIR__ . '/vendor/autoload.php';

$entityManagerFactory = new EntityManagerCreator;
$entityManager = $entityManagerFactory->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
