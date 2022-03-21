<?php

use Faculdade\Infra\EntityManagerCreator;
use Faculdade\Model\Aluno;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerCreator())->getEntityManager();

$id = $argv[1];
$aluno = $entityManager->getReference(Aluno::class, $id);

$entityManager->remove($aluno);
$entityManager->flush();
