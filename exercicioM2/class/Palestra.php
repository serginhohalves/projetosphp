<?php

class Palestra
{
    private $nome;
    private $data;
    private $turno;
    private $duracao;
    private $tema;
    private $sala;

    private $ministrante;

    public function __construct($nome, $data, $turno, $duracao, $tema, $sala)

    {
        $this->nome = $nome;
        $this->data = $data;
        $this->turno = $turno;
        $this->duracao = $duracao;
        $this->tema = $tema;
        $this->sala = $sala;
        $this->ministrante = new Ministrante();
    }



    public function getNome()
    {
        return $this->nome;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getTurno()
    {
        return $this->turno;
    }

    public function getDuracao()
    {
        return $this->duracao;
    }

    public function getTema()
    {
        return $this->tema;
    }

    public function getSala()
    {
        return $this->sala;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function setTurno($turno)
    {
        $this->turno = $turno;
    }

    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;
    }

    public function setTema($tema)
    {
        $this->tema = $tema;
    }

    public function setSala($sala)
    {
        $this->sala = $sala;
    }

    public function setMinistrante($nome, $formacao)
    {
        $this->ministrante->setMinistrante($nome, $formacao);
    }

    public function getMinistrante()
    {
        return $this->ministrante->getMinistrante();
    }






}