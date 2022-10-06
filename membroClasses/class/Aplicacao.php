<?php
require_once 'class/Biblioteca.php';
class Aplicacao extends Biblioteca
{
    //Declaracao das constantes
    const Ambiente = "Gnome Deskt";
    const Versao = "2.0";

    // metodo construtor

    function __construct($Nome)
    {
        echo parent::Nome . self::Ambiente . self::Versao . $Nome . "<br>";
    }
}

