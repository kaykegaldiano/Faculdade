<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Faculdade\Infra\EntityManagerCreator;
use Faculdade\Model\Curso;

$entityManager = (new EntityManagerCreator())->getEntityManager();

$id = $argv[1];
$novoNome = $argv[2];

// se alterar apenas uma entidade, pode fazer direto com o entity manager em vez de buscar um repositório inteiro
$curso = $entityManager->find(Curso::class, $id);
$curso->setNome($novoNome);

$entityManager->flush();
