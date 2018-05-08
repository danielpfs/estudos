<?php

namespace ChainOfResponsibility;


class SemDesconto implements Desconto
{
    private $proximo;

    public function calcula(Orcamento $orcamento)
    {
        return 0;
    }

    public function setProximo(Desconto $desconto)
    {
        //
    }
}