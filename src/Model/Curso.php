<?php

namespace Faculdade\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity
 * @Table(name="cursos")
 */
class Curso
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;
    /**
     * @Column(type="string")
     */
    private string $nome;
    /**
     * @Column(type="string")
     */
    private string $descricao;
    /**
     * @OneToMany(targetEntity="Aluno", mappedBy="curso")
     */
    private $alunos;

    public function __construct()
    {
        $this->alunos = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;
        return $this;
    }

    public function addAluno(Aluno $aluno): self
    {
        $this->alunos->add($aluno);
        $aluno->setCurso($this);
        return $this;
    }

    public function getAlunos(): Collection
    {
        return $this->alunos;
    }
}
