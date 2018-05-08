<?php

class LeilaoTest extends \PHPUnit\Framework\TestCase
{
    private $leilao;

    public function setUp()
    {
        $this->leilao = new LeilaoBuilder();
        $this->leilao->descricao("Produto");
    }

    public function testApenasDoisLancesEmSequencia()
    {
        $u = new Usuario("João");

        $this->leilao->lance($u, 200)
            ->lance($u, 250)
            ->lance($u, 300);

        $leilao = $this->leilao->build();

        $this->assertEquals(2, count($leilao->getLances()));
        $this->assertEquals(200, $leilao->getLances()[0]->getValor());
        $this->assertEquals(250, $leilao->getLances()[1]->getValor());
    }

    public function testApenasCincoLancesPorUsuario()
    {
        $u = new Usuario("João");
        $u1 = new Usuario("Maria");

        $this->leilao
            ->lance($u, 200)
            ->lance($u1, 250)
            ->lance($u, 300)
            ->lance($u1, 350)
            ->lance($u, 400)
            ->lance($u1, 450)
            ->lance($u, 500)
            ->lance($u1, 550)
            ->lance($u, 600)
            ->lance($u1, 650)
            ->lance($u, 700);

        $leilao = $this->leilao->build();

        $this->assertEquals(10, count($leilao->getLances()));
        $this->assertEquals(650, $leilao->getLances()[count($leilao->getLances()) - 1]->getValor());
    }

    public function testDobraLance()
    {
        $u = new Usuario("João");
        $u1 = new Usuario("Maria");
        $u2 = new Usuario("Zé");

        $this->leilao
            ->lance($u, 100)
            ->lance($u1, 150);

        $leilao = $this->leilao->build();

        $leilao->dobraLance($u);
        $leilao->dobraLance($u2);

        $this->assertEquals(3, count($leilao->getLances()));
        $this->assertEquals(200, $leilao->getLances()[2]->getValor());

    }
}