<?php
require_once '../bootstrap.php';

use Strategy\Calculadora;
use Strategy\ICCC;
use Strategy\ICMS;
use Strategy\ISS;
use Strategy\Orcamento;
use Strategy\Exercicio1\Arrojado;
use Strategy\Exercicio1\Conta;
use Strategy\Exercicio1\Conservador;
use Strategy\Exercicio1\Moderado;
use Strategy\Exercicio1\RealizadorDeInvestimentos;


$o = new Orcamento(1000);
$calculadora = new Calculadora();

add('Orçamento e Impostos', 'h2');
add('Valor: ' . $o->getValor());
add('ICMS: ' . $calculadora->imposto($o, new ICMS()));
add('ISS: ' . $calculadora->imposto($o, new ISS()));
add('ICCC: ' . $calculadora->imposto($o, new ICCC()));

build();

// --- Exercicio 1 ---
add('--- Conta e Investimentos ---', 'h2');
$rdi = new RealizadorDeInvestimentos();
$c[] = new Conta(500);
$c[] = new Conta(200);
$c[] = new Conta(100);

$rdi->investir($c[0], new Conservador());
$rdi->investir($c[1], new Moderado());
$rdi->investir($c[2], new Arrojado());

foreach ($c as $item) {
    add('Saldo: ' . $item->getSaldo());
}

build();