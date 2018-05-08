<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/4/18
 * Time: 11:44 PM
 */

namespace ChainOfResponsibility;


class Desconto500Reais implements Desconto
{
    private $proximo;

    public function calcula(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.05;
        }

        return $this->proximo->calcula($orcamento);
    }

    public function setProximo(Desconto $desconto)
    {
        $this->proximo = $desconto;
    }
}