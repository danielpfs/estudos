<?php
namespace ChainOfResponsibility\Exercicio;


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