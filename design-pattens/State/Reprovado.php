<?php
namespace State;

class Reprovado implements Estado
{
    public function calcularDesconto(Orcamento $orcamento) {}
        
    public function aprovar(Orcamento $orcamento)
    {
        throw new \Exception('Orçamento reprovado não pode ser aprovado.');
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new \Exception('O orçamento não pode ser reprovado mais de uma vez.');
    }

    public function finalizar(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Finalizado);
    }
}
