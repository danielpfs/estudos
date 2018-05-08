<?php
namespace State;

class Finalizado implements Estado
{
    public function calcularDesconto(Orcamento $orcamento) {}

    public function aprovar(Orcamento $orcamento)
    {
        throw new \Exception('O orçamento finalizado não pode ser aprovado.');
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new \Exception('O orçamento finalizado não pode ser reprovado.');
    }

    public function finalizar(Orcamento $orcamento)
    {
        throw new \Exception('O orçamento não pode ser finalizado mais de uma vez.');
    }
}
