<?php

class FiltroDeLancesTest extends \PHPUnit\Framework\TestCase
{

    public function testDeveSelecionarLancesEntre1000E3000()
    {
        $joao = new Usuario("Joao");

        $filtro = new FiltroDeLances();
        $lances = [];
        $lances[] = new Lance($joao, 2000);
        $lances[] = new Lance($joao, 1000);
        $lances[] = new Lance($joao, 3000);
        $lances[] = new Lance($joao, 800);

        $resultado = $filtro->filtra($lances);

        $this->assertEquals(1, count($resultado));
        $this->assertEquals(2000, $resultado[0]->getValor(), 0.00001);
    }

    public function testDeveSelecionarLancesEntre500E700()
    {
        $joao = new Usuario("Joao");

        $filtro = new FiltroDeLances();
        $lances = [];
        $lances[] = new Lance($joao, 600);
        $lances[] = new Lance($joao, 500);
        $lances[] = new Lance($joao, 700);
        $lances[] = new Lance($joao, 800);

        $resultado = $filtro->filtra($lances);
        $this->assertEquals(1, count($resultado));
        $this->assertEquals(600, $resultado[0]->getValor(), 0.00001);
    }

    public function testDeveSelecionarLancesMaiores5000()
    {
        $joao = new Usuario("Joao");

        $filtro = new FiltroDeLances();
        $lances = [];
        $lances[] = new Lance($joao, 500);
        $lances[] = new Lance($joao, 6000);

        $resultado = $filtro->filtra($lances);

        $this->assertEquals(1, count($resultado));
        $this->assertEquals(6000, $resultado[0]->getValor());
    }
    public function testDeveRetornarNulo()
    {
        $joao = new Usuario("Joao");

        $filtro = new FiltroDeLances();
        $lances = [];
        $lances[] = new Lance($joao, 200);
        $lances[] = new Lance($joao, 500);

        $resultado = $filtro->filtra($lances);

        $this->assertEquals(0, count($resultado));
    }
}