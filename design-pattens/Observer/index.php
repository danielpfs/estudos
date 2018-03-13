<?php
require_once '../bootstrap.php';
use Observer\NotaFiscalBuilder;
use Observer\Item;
use Observer\EmailNotaFiscal;
use Observer\NotaFiscalDao;
use Observer\Multiplicador;

echo'<h1>Observer</h1>';
$b = new NotaFiscalBuilder();

$b->com(new Item('Madeira', 200));

$b->noCnpj(1234);
$b->comRazaoSocial("A");
$b->nadata();
$b->comObservacao("Crua");
$b->addAcao(new EmailNotaFiscal());
$b->addAcao(new NotaFiscalDao());
$b->addAcao(new Multiplicador(3));

$n = $b->build();

echo var_dump($n);