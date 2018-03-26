<?php

class LanceTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @expectedException InvalidArgumentException
     */
    public function testLanceMenorQueZero()
    {
        $lance = new Lance(new Usuario("João"), -200);
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testLanceIgualAZero()
    {
        $lance = new Lance(new Usuario("João"), 0);
    }

}