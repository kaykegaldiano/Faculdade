<?php

use Faculdade\Infra\EntityManagerCreator;
use Faculdade\Model\Aluno;
use Faculdade\Model\Curso;
use Faculdade\Model\Telefone;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerCreator())->getEntityManager();

$aluno = new Aluno();

$aluno->setNome($argv[1]);
$aluno->setEmail($argv[2]);
// $idCurso = $argv[3];
$curso = $entityManager->find(Curso::class, 1);
$aluno->setCurso($curso);

for ($i = 3; $i < $argc; $i++) {
    $numeroTelefone = $argv[$i];
    $telefone = new Telefone();
    $telefone->setNumero($numeroTelefone);

    $aluno->addTelefone($telefone);
}

$entityManager->persist($aluno);
$entityManager->flush();
