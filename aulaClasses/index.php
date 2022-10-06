<?php

class Produto
{
    public $descricao;
    public $estoque;
    public $preco;

    public function aumentatEstoque($unidades)
    {
        if (is_numeric($unidades) && $unidades > 0) {
            $this->estoque += $unidades;
        }
    }

    public function diminurtEstoque($unidades)
    {
        if (is_numeric($unidades) and $unidades > 0) {
            $this->estoque -= $unidades;
        }
    }

    public function reajustarPreco($percentual)
    {
        if(is_numeric($percentual) and $percentual > 0)
        {
            $this->preco *= (1 + ($percentual/100));
        }
    }
}

 
$p1 = new Produto;
$p1->descricao = 'Chocolate Amargo';
$p1->estoque = 10;
$p1->preco = 7;

echo "<pre>";
    var_dump($p1);
 echo "</pre>";



$p1->aumentatEstoque(10);
$p1->diminurtEstoque(5);
$p1->reajustarPreco(10);


echo "<pre>";
    var_dump($p1);
 echo "</pre>";