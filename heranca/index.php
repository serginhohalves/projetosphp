<?php

require_once 'class/Conta.php';
require_once 'class/ContaCorrente.php';
require_once 'class/ContaPoupanca.php';


$contaPoupanca1 = new ContaPoupanca('1230', '300302', 1000);

// depositar

echo "Saldo atual: " . $contaPoupanca1->getSaldo() . "<br>";
$contaPoupanca1->depositar(1000);
echo "Saldo Apos Deposito: " . $contaPoupanca1->getSaldo(). "<br>";


// retirada 

$contaPoupanca1->retirar(500);
echo "Saldo Apos Retirada: " . $contaPoupanca1->getSaldo() . "<br>";




echo "<pre>"; 
var_dump($contaPoupanca1);
echo "</pre>";
