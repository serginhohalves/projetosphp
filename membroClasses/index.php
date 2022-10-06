<?php

require_once 'class/Aplicacao.php';
require_once 'class/Biblioteca.php';


// echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao . $Nome . "/n";

echo Biblioteca::Nome . Aplicacao::Ambiente . Aplicacao::Versao .  "<br>";

new Aplicacao("Dia");
new Aplicacao("Gimp");