<?php

require_once 'class/Produto.php';
require_once 'class/Caracteristica.php';



$p1 = new Produto('Chocolate', 10, 8);
$p1->addCaracteristica('Cor', 'Branco');
$p1->addCaracteristica('Peso', '100g');




// echo '<pre>';
// print_r($p1);
// echo '</pre>';


print 'Produto' . $p1->getDescricao() . '<br>';

// características do prodito


foreach($p1->getCaracteristica() as $caracteristica)
{
    $nome = $caracteristica->getNome();
    $valor = $caracteristica->getValor();

    print "Caracteristica {$nome} = {$valor}<br>";
}