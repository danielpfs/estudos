<?php
namespace State;

class Aprovado implements Estado
{
    private $desconto = false;

    public function calcularDesconto(Orcamento $orcamento)
    {
        if (!$this->desconto) {
            $this->desconto = true;
            return $orcamento->getValor() * 0.02;
        }
        throw new \Exception('O desconto só pode ser aplicado apenas uma vez.');
    }

    public function aprovar(Orcamento $orcamento)
    {
        throw new \Exception('O orçamento não pode ser aprovado mais de uma vez.');
    }

    public function reprovar(Orcamento $orcamento)
    {
        throw new \Exception('Orçamento aprovado não pode ser reprovado.');
    }

    public function finalizar(Orcamento $orcamento)
    {
        $orcamento->setEstado(new Finalizado);
    }
}
