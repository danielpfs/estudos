<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/6/18
 * Time: 5:08 PM
 */

namespace ChainOfResponsibility\Exercicio1;


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