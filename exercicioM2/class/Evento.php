<?php

class Evento
{
    private $nome;
    private $local;
    private $dataInicio;
    private $dataFim;
    private $palestras;
    public function __construct($nome, $local, $dataInicio, $dataFim, $palestras)
    {
        $this->nome = $nome;
        $this->local = $local;
        $this->dataInicio = $dataInicio;
        $this->dataFim = $dataFim;
        //um evento tem muitas palestras
        $this->palestras[] = $palestras;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    public function getDataFim()
    {
        return $this->dataFim;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setLocal($local)
    {
        $this->local = $local;
    }

    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;
    }

    public function setDataFim($dataFim)
    {
        $this->dataFim = $dataFim;
    }

    public function addPalestra(Palestra $palestras)
    {
        $this->palestras[] = $palestras;
    }

    public function getPalestras()
    {
        return $this->palestras;
    }

}