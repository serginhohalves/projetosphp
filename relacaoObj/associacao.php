<?php

require_once 'class/Fabricante.php';
require_once 'class/Produto.php';


$produto1 = new Produto('Livro de PHP', 10, 100);
$fabricante1 = new Fabricante('Fabricante tal', 'Rua 1', '123456789');

$produto1->setFabricante($f1);

$descricao = $produto1->getDescricao();
$nome_fabr = $produto1->getFabricante()->getNome();


echo "Descrição do produto: {$descricao} <br>{$nome_fabr}";

