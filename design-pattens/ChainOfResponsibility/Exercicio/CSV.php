<?php
namespace ChainOfResponsibility\Exercicio;


class CSV implements Resposta
{
    private $proxima;

    public function responde(Requisicao $requisicao, Conta $conta)
    {
        if ($requisicao->getFormato() == Formato::$CSV) {
            return "name, saldo<br>{$conta->getTitular()}, {$conta->getSaldo()}";
        }

        if ($this->proxima) {
            return $this->proxima->responde($requisicao, $conta);
        }
    }

    public function setProxima(Resposta $resposta)
    {
        $this->proxima = $resposta;
    }
}