<?php

require_once 'class/Produto.php';
require_once 'class/Orcamento.php';


$orc = new Orcamento();
$orc->adiciona(new Produto('Vinho', 10, 100), 2);
$orc->adiciona(new Produto('Cerveja', 10, 10), 2);
$orc->adiciona(new Produto('Refrigerante', 10, 5), 2);
$orc->adiciona(new Produto('Cachaça', 10, 50), 2);
$orc->adiciona(new Produto('Cerveja', 10, 10), 2);

print $orc->calculaTotal();


