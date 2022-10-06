<?php


class Fabricante 
{
    private $nome;
    private $endereco;
    private $documento;


    public function __construct($nome, $endereco, $documento)
    {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->documento = $documento;
    }
    
    public function getNome()
    {
        return  "Nome do fabricante: {$this->nome} -- Endereço: {$this->endereco} -- Documento: {$this->documento}";
    }
}