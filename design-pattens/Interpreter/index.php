<?php
require "../bootstrap.php";


$e = new \Interpreter\Division(new \Interpreter\Number(3), new \Interpreter\Number(2));

$e = new \Interpreter\SquareRoot(new \Interpreter\Number(81));
echo $e->evaluate();