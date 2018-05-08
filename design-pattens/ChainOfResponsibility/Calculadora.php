<?php

namespace ChainOfResponsibility;

class Calculadora
{
    public function desconto(Orcamento $orcamento)
    {
        $d5 = new Desconto5Itens();
        $dQ = new Desconto500Reais();
        $dV = new DescontoVendaCasada();
        $sD = new SemDesconto();

        $d5->setProximo($dQ);
        $dQ->setProximo($dV);
        $dV->setProximo($sD);

        return $d5->calcula($orcamento);
    }

    // Problema = Lista com "ifs" em ordem de prioridade

    //    public function desconto(Orcamento $orcamento)
    //    {
    //        if (count($orcamento->getItens()) > 5) {
    //
    //            return $orcamento->getValor() * 0.1;
    //
    //        } elseif ($orcamento->getValor() > 300) {
    //
    //            return $orcamento->getValor() * 0.05;
    //
    //        }
    //
    //        return 0;
    //    }
}