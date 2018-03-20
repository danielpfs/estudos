<?php
require "../bootstrap.php";

add('Command', 'h1');

$o = new \Command\Order('Steve', 150);

$q = new \Command\QueueCommand();

$q->add(new \Command\PayOrderCommand($o));
$q->add(new \Command\FinishOrderCommand($o));

add($q->execute());

build();

var_dump($o);