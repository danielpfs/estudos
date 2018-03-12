<?php
namespace ChainOfResponsibility\Exercicio;


class Porcento implements Resposta
{
    private $proxima;

    public function responde(Requisicao $requisicao, Conta $conta)
    {
        if ($requisicao->getFormato() == Formato::$PORCENTO) {
            return "titular%{$conta->getTitular()}%saldo%{$conta->getSaldo()}";
        }

        return $this->proxima->responde($requisicao, $conta);
    }

    public function setProxima(Resposta $resposta)
    {
        $this->proxima = $resposta;
    }
}