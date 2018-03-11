<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/6/18
 * Time: 5:08 PM
 */

namespace ChainOfResponsibility\Exercicio1;


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