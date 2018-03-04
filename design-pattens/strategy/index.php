<?php
function autoload($class) {
    include $class.'.php';
}

spl_autoload_register('autoload');

$o = new Orcamento(1000);
$calculadora = new Calculadora();

echo $o->getValor();
echo '<br>';

echo $calculadora->imposto($o, new ICMS());
echo '<br>';

echo $calculadora->imposto($o, new ISS());
echo '<br>';

echo $calculadora->imposto($o, new ICCC());
echo '<br>';

echo '--- Conta e Investimentos ---';
echo '<br>';
$rdi = new RealizadorDeInvestimentos();
$c[] = new Conta(500);
$c[] = new Conta(200);
$c[] = new Conta(100);

$rdi->investir($c[0], new Conservador());
$rdi->investir($c[1], new Moderado());
$rdi->investir($c[2], new Arrojado());

foreach ($c as $item) {
    echo $item->getSaldo();
    echo '<br>';
}