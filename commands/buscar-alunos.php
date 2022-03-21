<?php

use Faculdade\Infra\EntityManagerCreator;
use Faculdade\Model\Aluno;
use Faculdade\Model\Telefone;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = (new EntityManagerCreator())->getEntityManager();

$alunoRepository = $entityManager->getRepository(Aluno::class);

/** @var Aluno[] $alunoList */
$alunoList = $alunoRepository->findAll();

foreach ($alunoList as $aluno) {
    $telefones = $aluno
        ->getTelefones()
        ->map(function (Telefone $telefone) {
            return $telefone->getNumero();
        })
        ->toArray();
    echo "ID: {$aluno->getId()}\nNome: {$aluno->getNome()}\nE-mail: {$aluno->getEmail()}\n";
    echo "Telefones: " . implode(', ', $telefones) . "\n\n";
}
