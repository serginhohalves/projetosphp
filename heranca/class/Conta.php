<?php


class Conta
{
    protected $agencia;
    protected $conta;

    public function __construct($agencia, $conta, $saldo)
    {
        $this->agencia = $agencia;
        $this->conta = $conta;
        if ($saldo > 0) {
            $this->saldo = $saldo;
        }
    }

    public function getAgencia()
    {
        return $this->agencia;
    }

    public function getConta()
    {
        return $this->conta;
    }

    public function depositar($quantia)
    {
        if ($quantia > 0) {
            $this->saldo += $quantia;
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }
}
