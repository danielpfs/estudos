<?php
require '../bootstrap.php';
use State\Orcamento;
use State\Exercicio\Conta;

add('State', 'h1');

$o = new Orcamento(2500);

add('Valor: '.$o->getValor());
$o->desconto();
add('Valor: '.$o->getValor());
$o->aprovar();
$o->desconto();
add('Valor: '.$o->getValor());
$o->finalizar();
$o->desconto();
add('Valor: '.$o->getValor());

build();

add('Exercicio', 'h2');
$c = new Conta(250);
add('Saldo: '.$c->getSaldo());
$c->depositar(10);
add('Saldo: '.$c->getSaldo());
$c->sacar(280);
add('Saldo: '.$c->getSaldo());
$c->depositar(30);
add('Saldo: '.$c->getSaldo());

build();