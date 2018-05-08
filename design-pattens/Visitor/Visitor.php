<?php
namespace Visitor;

interface Visitor
{
    public function subtraction(Subtraction $subtraction);
    public function summation(Summation $summation);
    public function number(Number $number);
}