<?php
require_once '../bootstrap.php';
use Builder\NotaFiscalBuilder;
use Builder\Item;

$b = new NotaFiscalBuilder();

$b->com(new Item('Madeira', 200));

$b->noCnpj(1234);
$b->comRazaoSocial("A");
$b->nadata();
$b->comObservacao("Crua");

$n = $b->build();

echo'<h1>Builder</h1>';
echo var_dump($n);
