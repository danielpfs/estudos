<?php
require '../bootstrap.php';

echo '<h1>Singleton</h1>';

$s = \SingletonAndFacade\Service::class;

var_dump($s::getInstance());

echo '<h1>Facade</h1>';

$f = new \SingletonAndFacade\ExampleFacade();

$con = $f->getConnection('local', 'user', 'pass');
$order = $f->getOrder('Nome');

var_dump($con);
var_dump($order);
