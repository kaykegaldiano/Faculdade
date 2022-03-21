<?php

namespace Faculdade\Model;

use Faculdade\Model\Curso;
use Faculdade\Model\Aluno;

class Faculdade
{
    private string $nome;
    private Curso $curso;
    private Aluno $usuario;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCurso(): Curso
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }

    public function getUsuario(): Aluno
    {
        return $this->usuario;
    }
}
