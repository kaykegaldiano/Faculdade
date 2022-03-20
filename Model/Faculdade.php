<?php

class Faculdade
{
    private string $nome;
    private string $curso;
    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getCurso(): string
    {
        return $this->curso;
    }

    public function setCurso($curso)
    {
        $this->curso = $curso;
    }
}