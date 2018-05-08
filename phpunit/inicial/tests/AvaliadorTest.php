<?php

class AvaliadorTest extends \PHPUnit\Framework\TestCase
{
    private $leiloeiro;

    public function SetUp()
    {
        $this->leiloeiro = new Avaliador();
    }

    public function testTresMaioresLances()
    {
        $leilao = new Leilao("Produto");

        $u = new Usuario("João");
        $u1 = new Usuario("Carol");

        $leilao->propoe(new Lance($u1, 700));
        $leilao->propoe(new Lance($u, 630));
        $leilao->propoe(new Lance($u1, 450));
        $leilao->propoe(new Lance($u, 200));
        $leilao->propoe(new Lance($u1, 230));

        
        $this->leiloeiro->avalia($leilao);

        $this->assertEquals(3, count($this->leiloeiro->getTresMaiores()));
    }

    public function testApenasDoisLances()
    {
        $leilao = new Leilao("Produto");

        $u = new Usuario("João");
        $u1 = new Usuario("Carol");

        $leilao->propoe(new Lance($u1, 700));
        $leilao->propoe(new Lance($u, 630));

        $this->leiloeiro->avalia($leilao);

        $this->assertEquals(2, count($this->leiloeiro->getTresMaiores()));
    }

    /**
     * @expectedException InvalidArgumentException
     */
    public function testSemLances()
    {
        $leilao = new Leilao("Produto");

        $this->leiloeiro->avalia($leilao);
    }
}