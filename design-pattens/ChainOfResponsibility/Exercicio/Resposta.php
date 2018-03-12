<?php
namespace ChainOfResponsibility\Exercicio;


interface Resposta
{
    public function responde(Requisicao $requisicao, Conta $conta);
    public function setProxima(Resposta $resposta);
}