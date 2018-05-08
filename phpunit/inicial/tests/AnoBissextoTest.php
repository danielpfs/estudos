<?php

class AnoBissextoTest extends \PHPUnit\Framework\TestCase
{
    public function testEhAnoBissexto()
    {
        $a = new AnoBissexto();

        $this->assertFalse($a->ehBissexto(2015));
        $this->assertTrue($a->ehBissexto(2016));
        $this->assertTrue($a->ehBissexto(1600));
    }
}