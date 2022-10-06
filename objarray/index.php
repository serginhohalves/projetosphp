<?php


$produto = [];
$produto['nome'] = 'Notebook';
$produto['preco'] = 2000;
$produto['descricao'] = 'Notebook Dell';

$objeto = (object)$produto;

foreach($produto as $chave => $valor)
{
    $objeto->$chave = $valor;
}


echo '<pre>';
var_dump($objeto);
echo '</pre>';