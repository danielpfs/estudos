<?php
namespace State;

class EmAprovacao implements Estado
{
    private $desconto = false;

    public function calcularDesconto(Orcamento $orcamento)
    {
        if (!$this->desconto) {
            $this->desconto = true;
            return $orcamento->getValor() * 0.05;
        }
        throw new \Exception('O desconto só pode ser aplicado apenas uma vez.');
    }
    
    public function aprovar(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Aprovado);
    }

    public function reprovar(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Reprovado);
    }

    public function finalizar(Orcamento $orcamento)
    {
        throw new \Exception('O orçamento não pode ser finalizado antes de ser aprovado ou reprovado.');
    }
}
