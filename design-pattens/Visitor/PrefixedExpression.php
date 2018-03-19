<?php
namespace Visitor;


class PrefixedExpression implements Visitor
{
    public function subtraction(Subtraction $subtraction)
    {
        return "- {$subtraction->getLeft()->accept($this)} {$subtraction->getRight()->accept($this)}";
    }

    public function summation(Summation $summation)
    {
        return "+ {$summation->getLeft()->accept($this)} {$summation->getRight()->accept($this)}";
    }

    public function number(Number $number)
    {
        return $number->getNumber();
    }
}