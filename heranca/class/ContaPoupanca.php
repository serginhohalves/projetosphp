<?php

class ContaPoupanca extends Conta
{
    public function retirar($quantia)
    {
        if($quantia > 0 && $this->saldo >= $quantia) {
            $this->saldo -= $quantia;
        }
        else {
            return false;
            echo "Saldo insuficiente";
        }
        true;
    }

    
}