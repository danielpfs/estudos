<?php
namespace Visitor;

interface Expression
{
    public function evaluate();
    public function accept(Visitor $visitor);
}