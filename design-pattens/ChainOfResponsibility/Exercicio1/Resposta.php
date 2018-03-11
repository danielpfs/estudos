<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/6/18
 * Time: 4:58 PM
 */

namespace ChainOfResponsibility\Exercicio1;


interface Resposta
{
    public function responde(Requisicao $requisicao, Conta $conta);
    public function setProxima(Resposta $resposta);
}