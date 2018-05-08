<?php
namespace ChainOfResponsibility\Exercicio;


class XML implements Resposta
{
    private $proxima;

    public function responde(Requisicao $requisicao, Conta $conta)
    {
        if ($requisicao->getFormato() == Formato::$XML) {
            return "<conta><titular>{$conta->getTitular()}</titular><saldo>{$conta->getSaldo()}</saldo></conta>";
        }

        return $this->proxima->responde($requisicao, $conta);
    }

    public function setProxima(Resposta $resposta)
    {
        $this->proxima = $resposta;
    }
}