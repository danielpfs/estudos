<?php

namespace ChainOfResponsibility;


class Desconto5Itens implements Desconto
{
    private $proximo;

    public function calcula(Orcamento $orcamento)
    {
        if (count($orcamento->getItens()) > 5) {
            return $orcamento->getValor() * 0.1;
        }

        return $this->proximo->calcula($orcamento);
    }

    public function setProximo(Desconto $desconto)
    {
        $this->proximo = $desconto;
    }
}