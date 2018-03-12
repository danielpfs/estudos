<?php
namespace Decorator\Exercicio;

abstract class TemplateFiltro extends Filtro
{
    public function filtrar($contas)
    {
        $r = [];
        foreach ($contas as $conta) {
            if ($this->condicao($conta)) {
                $r[] = $conta;                
            }
        }

        return $this->outroFiltro($r) ?? $r;
    }
    
    abstract protected function condicao(Conta $conta);
}