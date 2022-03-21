<?php

use Faculdade\Infra\EntityManagerCreator;
use Faculdade\Model\Curso;

require_once __DIR__ . '/../vendor/autoload.php';

$curso = new Curso();
$curso->setNome('Análise e Desenvolvimento de Sistemas');
$curso->setDescricao('Curso de ADS');

$entityManagerFactory = new EntityManagerCreator();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($curso);

$entityManager->flush();
