<?php
require_once '../bootstrap.php';
use TemplateMethod\Orcamento;   
use TemplateMethod\Calculadora;
use TemplateMethod\ICPP;
use TemplateMethod\IKCV;
use TemplateMethod\IHIT;
use TemplateMethod\Item;
use TemplateMethod\Exercicio1\Conta;
use TemplateMethod\Exercicio1\RelatorioSimples;
use TemplateMethod\Exercicio1\RelatorioComplexo;

add('Template Method', 'h1');

$c = new Calculadora();
$o = new Orcamento(500);
$o->addItem(new Item('P1', 100));
$o->addItem(new Item('P2', 100));
$o->addItem(new Item('P1', 100));
$o->addItem(new Item('P4', 100));
$o->addItem(new Item('P5', 100));

$o1 = new Orcamento(1000);
$o1->addItem(new Item('Moto', 1000));

add($c->imposto($o, new ICPP()));
add($c->imposto($o1, new IKCV()));
add($c->imposto($o, new IHIT()));

build();

echo '<h1>Exercício1</h1>';

$rs = new RelatorioSimples;
$rc = new RelatorioComplexo;
$contas[] = new Conta('João', '222', '5555', '500');
$contas[] = new Conta('Maria', '111', '1245', '1500');
$contas[] = new Conta('André', '124', '3333', '250');

echo $rs->gerar($contas);
echo $rc->gerar($contas);

