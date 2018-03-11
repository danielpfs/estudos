<?php
namespace TemplateMethod;


class IHIT extends TemplateImpostoCondicional
{
    public function condicao(Orcamento $orcamento)
    {
        return $this->checarItens($orcamento);
    }

    public function verdadeiro(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.13;
    }

    public function falso(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.01 * count($orcamento->getItens());
    }

    private function checarItens(Orcamento $orcamento)
    {
        $array = [];
        foreach ($orcamento->getItens() as $item) {
            if (in_array($item->getName(), $array)) {
                return true;
            } else {
                $array[] = $item->getName();
            }
        }
        return false;
    }
}