<?php
namespace State;

interface Estado
{
    public function calcularDesconto(Orcamento $orcamento);
    public function aprovar(Orcamento $orcamento);
    public function reprovar(Orcamento $orcamento);
    public function finalizar(Orcamento $orcamento);
}