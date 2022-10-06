<?php

$produto = new stdClass();
$produto->descricao = 'Chocolate';
$produto->estoque = 100;
$produto->preco = 7;

print "O produto {$produto->descricao} custa {$produto->preco} reais";
print "<br>";
print_r($produto);