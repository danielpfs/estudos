<?php
require_once '../bootstrap.php';
use Decorator\Orcamento;   
use Decorator\ICPP;
use Decorator\IHIT;
use Decorator\ImpostoMuitoAlto;
use Decorator\Exercicio\Conta;
use Decorator\Exercicio\FiltroAberturaMesCorrente;
use Decorator\Exercicio\FiltroMenor100;
use Decorator\Exercicio\FiltroMaior500;

add('Decorator', 'h1');

$o = new Orcamento(500);
$o1 = new Orcamento(1000);

// Decorator é o padrão para incrementação.
$impostoComplexo = new ICPP(new IHIT());
$impostoAlto = new ImpostoMuitoAlto(new ICPP());
add('Impostos: '.$impostoComplexo->calcula($o));
add($impostoAlto->calcula($o1));

build();

add('Exercício', 'h2');

$contas[] = new Conta(300, new DateTime('2015-02-20'));
$contas[] = new Conta(50, new DateTime('2017-12-23'));
$contas[] = new Conta(1200, new DateTime('2015-02-20'));
$contas[] = new Conta(80, new DateTime('now'));
$contas[] = new Conta(600, new DateTime('now'));

$filtro = new FiltroAberturaMesCorrente(new FiltroMenor100());
$contas = $filtro->filtrar($contas);
foreach ($contas as $conta) {
    add('Saldo: '. $conta->getSaldo());
    add('Data: '. $conta->getData()->format('d-m-Y'));
    add('--------------');
}

build();

