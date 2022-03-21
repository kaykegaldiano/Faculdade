<?php

use Faculdade\Infra\EntityManagerCreator;
use Faculdade\Model\Curso;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerCreator())->getEntityManager();

$id = $argv[1];
$curso = $entityManager->getReference(Curso::class, $id);

$entityManager->remove($curso);
$entityManager->flush();
