<?php
require '../bootstrap.php';

$s = new \Visitor\Summation(new \Visitor\Subtraction(new \Visitor\Number(10), new \Visitor\Number(4)), new \Visitor\Number(2));

$p = $s->accept(new \Visitor\PrefixedExpression());
echo $s->accept(new \Visitor\PrintExpression());
echo '<br>';
echo $p;