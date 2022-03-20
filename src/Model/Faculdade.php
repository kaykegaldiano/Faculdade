<?php

namespace Faculdade\Model;

use Faculdade\Model\Curso;
use Faculdade\Model\Usuario;

class Faculdade
{
    private string $nome;
    private Curso $curso;
    private Usuario $usuario;
    
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

    public function getUsuario(): Usuario
    {
        return $this->usuario;
    }
}