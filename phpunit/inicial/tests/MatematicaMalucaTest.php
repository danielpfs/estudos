<?php

class MatematicaMalucaTest extends \PHPUnit\Framework\TestCase
{
    function testMaiorQue30()
    {
        $m = new MatematicaMaluca();

        $this->assertEquals(32*4, $m->contaMaluca(32));
    }

    function testMaiorQue10()
    {
        $m = new MatematicaMaluca();

        $this->assertEquals(11*3, $m->contaMaluca(11));

    }

    function testMenorQue10()
    {
        $m = new MatematicaMaluca();

        $this->assertEquals(8*2, $m->contaMaluca(8));
    }
}