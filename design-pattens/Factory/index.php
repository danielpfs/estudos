<?php
require '../bootstrap.php';
use Factory\Exercicio\ConnectionFactory;
//
//$f = new ConnectionFactory();
//$con = $f->getConnection();
//
//var_dump($con);

$con = new ConnectionFactory();

echo $con->getConnection();