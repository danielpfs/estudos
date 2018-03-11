<?php
/**
 * Created by PhpStorm.
 * User: danielsoares
 * Date: 3/6/18
 * Time: 5:08 PM
 */

namespace ChainOfResponsibility\Exercicio1;


class SemResposta implements Resposta
{
    public function responde(Requisicao $requisicao, Conta $conta)
    {
        return 'Formato Inválido';
    }

    public function setProxima(Resposta $resposta)
    {

    }
}