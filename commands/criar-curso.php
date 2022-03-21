<?php

use Faculdade\Infra\EntityManagerCreator;
use Faculdade\Model\Curso;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerCreator();
$entityManager = $entityManagerFactory->getEntityManager();

$curso = new Curso();
$curso->setNome($argv[1]);
$curso->setDescricao($argv[2]);

$entityManager->persist($curso);
$entityManager->flush();
