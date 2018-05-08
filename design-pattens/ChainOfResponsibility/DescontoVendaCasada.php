<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/5/18
 * Time: 12:34 AM
 */

namespace ChainOfResponsibility;


class DescontoVendaCasada implements Desconto
{
    private $proximo;

    public function calcula(Orcamento $orcamento)
    {
        if ($this->existe('Lápis', $orcamento) and $this->existe('Caneta', $orcamento)) {
            return $orcamento->getValor() * 0.05;
        }
        return $this->proximo->calcula($orcamento);
    }

    public function setProximo(Desconto $desconto)
    {
        $this->proximo = $desconto;
    }

    private function existe($nomeDoItem, Orcamento $orcamento) {
        foreach ($orcamento->getItens() as $item) {
            if($item->getNome() == $nomeDoItem) return true;
        }
        return false;
    }
}