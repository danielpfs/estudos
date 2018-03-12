<?php
require_once '../bootstrap.php';

use ChainOfResponsibility\Orcamento;
use ChainOfResponsibility\Calculadora;
use ChainOfResponsibility\Item;
use ChainOfResponsibility\Exercicio\Conta;
use ChainOfResponsibility\Exercicio\Requisicao;
use ChainOfResponsibility\Exercicio\Formato;

$calc = new Calculadora();
$o = new Orcamento(500);
$o->addItem(new Item('Moto', 2500));
$o->addItem(new Item('Moto', 2500));
$o->addItem(new Item('Moto', 2500));
$o->addItem(new Item('Moto', 2500));
$o->addItem(new Item('Moto', 2500));
$o->addItem(new Item('Moto', 2500));

add('Calcula o desconto do Orçamento', 'h2');
add('Valor do Orçamento: '.$o->getValor());
add('Desconto: '.$calc->desconto($o));

build();

// Exercicio

$c = new Conta('Zé', 250);
$r = new Requisicao(Formato::$PORCENTO);
add('Exercicio - Web Server', 'h2');
add($c->getTitular());
add('Saldo: '. $c->getSaldo());
add('Requisição', 'h4');
add($r->requisitar($c));
build();