<?php
namespace Decorator\Exercicio;

abstract class Filtro
{
    private $outroFiltro;

    public function __construct(Filtro $outroFiltro = null)
    {
        $this->outroFiltro = $outroFiltro;
    }
    abstract public function filtrar($contas);

    protected function outroFiltro($contas)
    {
        if ($this->outroFiltro) {
            return $this->outroFiltro->filtrar($contas);
        }
    }
}
