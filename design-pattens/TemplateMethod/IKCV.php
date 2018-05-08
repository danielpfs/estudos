<?php
namespace TemplateMethod;


class IKCV extends TemplateImpostoCondicional
{
    public function condicao(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500 and $this->checarItens($orcamento);
    }

    public function verdadeiro(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.1;
    }

    public function falso(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }

    private function checarItens(Orcamento $orcamento)
    {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getValor() > 100) {
                return true;
            }
        }

        return false;
    }
}