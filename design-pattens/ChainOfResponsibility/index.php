<?php
require_once '../bootstrap.php';

use ChainOfResponsibility\Orcamento;
use ChainOfResponsibility\Calculadora;
use ChainOfResponsibility\Item;

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

// Exercicio 1
add('Web Server', 'h2');

build();