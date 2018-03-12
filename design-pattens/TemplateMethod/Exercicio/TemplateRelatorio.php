<?php
namespace TemplateMethod\Exercicio;

abstract class TemplateRelatorio implements Relatorio
{
    public function gerar(array $contas)
    {
        $this->cabecalho();
        foreach ($contas as $conta) {
            $this->corpo($conta);
        }
        $this->rodape();
    }

    abstract protected function cabecalho();
    abstract protected function corpo(Conta $conta);
    abstract protected function rodape();

}