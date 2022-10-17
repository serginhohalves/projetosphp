<?php

class Ministrante
{
    private $nome;
    private $formacao;

    public function __construct($nome, $formacao)
    {
        $this->nome = $nome;
        $this->formacao = $formacao;
    }

    public function setMinistrante($nome, $formacao)
    {
        $this->nome = $nome;
        $this->formacao = $formacao;
    }

    public function getMinistrante()
    {
        return " Ministrante: {$this->nome} - Formação: {$this->formacao}";
    }

}