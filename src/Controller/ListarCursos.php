<?php

namespace Faculdade\Controller;

use Faculdade\Infra\EntityManagerCreator;
use Faculdade\Model\Curso;

class ListarCursos implements InterfaceControladorRequisicao
{
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos = $entityManager->getRepository(Curso::class);
    }
    public function processaRequisicao(): void
    {
        $cursos = $this->repositorioDeCursos->findAll();
        require __DIR__ . '/../../view/listar-cursos.php';
    }
}
