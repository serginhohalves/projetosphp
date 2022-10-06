<?php

require_once 'class/Cesta.php';
require_once 'class/Produto.php';


$cesta1 = new Cesta();

$produto1 = new Produto('Chocolate', 10, 8);
$produto2 = new Produto('Café', 10, 8);
$produto3 = new Produto('Leite', 10, 8);

$cesta1->addItem($produto1);
$cesta1->addItem($produto2);
$cesta1->addItem($produto3);


foreach($cesta1->getItens() as $produto)
{
    $descricao = $produto->getDescricao();
    $preco = $produto->getPreco();

    print "Produto: {$descricao} - Preço: {$preco}<br>";
}


// echo '<pre>';
// print_r($cesta1);
// echo '</pre>';