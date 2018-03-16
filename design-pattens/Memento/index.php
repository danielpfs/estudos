<?php
require '../bootstrap.php';
use Memento\Contract;
use Memento\Historic;

$h = new Historic();
$c = new Contract("João");

var_dump($c);
$c->next();
$h->addStateContract($c->saveState());
var_dump($c);
$c->next();
$h->addStateContract($c->saveState());
var_dump($c);
$c->next();
var_dump($c);
$h->addStateContract($c->saveState());

var_dump($h->getStateContract(0));