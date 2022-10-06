<?php

require_once 'turma.php';
class Aluno {
    private $nome;
    private $matricula;
    private $turma;

    public function __construct($nome, $matricula, $turma) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->turma = $turma;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getTurma() {
        return $this->turma;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function setTurma($turma) {
        $this->turma = $turma;
    }

}