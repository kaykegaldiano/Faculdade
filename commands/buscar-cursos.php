<?php

use Faculdade\Infra\EntityManagerCreator;
use Faculdade\Model\Curso;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManagerFactory = new EntityManagerCreator();
$entityManager = $entityManagerFactory->getEntityManager();

$cursoRepository = $entityManager->getRepository(Curso::class);

/** @var Curso[] $cursoList */
$cursoList = $cursoRepository->findAll();

foreach ($cursoList as $curso) {
    echo "ID Curso: {$curso->getId()}\nNome: {$curso->getNome()}\nDescrição: {$curso->getDescricao()}\n\n";
}

$ads = $cursoRepository->findOneBy(['id' => 1]);

echo $ads->getNome();
