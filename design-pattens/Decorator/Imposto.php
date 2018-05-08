<?php
namespace Decorator;


abstract class Imposto
{
    private $outroImposto;

    public function __construct(Imposto $outroImposto = null)
    {
        $this->outroImposto = $outroImposto;
    }

    abstract public function calcula(Orcamento $orcamento);

    protected function outroImposto(Orcamento $orcamento)
    {
        if ($this->outroImposto) {
            return $this->outroImposto->calcula($orcamento);
        }
    }
}