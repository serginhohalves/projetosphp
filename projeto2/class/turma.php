<?php

require_once 'aluno.php';

class Turma 
{
    private $alunos;
    private $nome;
    private $professor;

    public function __construct($nome, $professor) {
        $this->nome = $nome;
        $this->professor = $professor;
        $this->alunos = array(); 
    }

    public function getAlunos() {
        return $this->alunos;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getProfessor() {
        return $this->professor;
    }

    public function setAlunos($alunos) {
        $this->alunos = $alunos;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setProfessor($professor) {
        $this->professor = $professor;
    }

    public function addAluno($aluno) {
        $this->alunos[] = $aluno;
    }

    public function removeAluno($aluno) {
        $key = array_search($aluno, $this->alunos);
        if ($key !== false) {
            unset($this->alunos[$key]);
        }
    }

}