<?php

class funcionario 
{
    private $nome;
    private $salario;
    private $cargo;

    public function __construct($nome, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->salalario = $salario;
        $this->cargo = $cargo;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nomeFunci)
    {
        $this->nome = $nomeFunci;
    }

    public function resjustaSalario($perc)
    {
        $this->salario = $this->salario + ($this->salario * $perc / 100);
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }




}