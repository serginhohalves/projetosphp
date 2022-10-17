<?php

class Participante
{
    private $nome;
    private $fone;
    private $endereco;
    private $email;

    public function __construct($nome, $fone, $endereco, $email)
    {
        $this->nome = $nome;
        $this->fone = $fone;
        $this->endereco = $endereco;
        $this->email = $email;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getFone()
    {
        return $this->fone;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setFone($fone)
    {
        $this->fone = $fone;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

}