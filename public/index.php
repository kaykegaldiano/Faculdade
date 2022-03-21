<?php

use Faculdade\Controller\ListarCursos;

require __DIR__ . '/../vendor/autoload.php';

switch($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        $controlador = new ListarCursos;
        $controlador->processaRequisicao();
        break;
    default:
        echo 'ERROR 404 PAGE NOT FOUND';
}