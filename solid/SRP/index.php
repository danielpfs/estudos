<?php

interface Regra
{
    public function calcula(Funcionario $funcionario);
}

class DezOuVintePorcento implements Regra
{
    public function calcula(Funcionario $funcionario)
    {
        if ($funcionario->getSalario() > 3000) {
            return $funcionario->getSalario() * 0.8;
        }

        return $funcionario->getSalario() * 0.9;
    }
}

class QuinzeOuVinteCincoPorcento implements Regra
{
    public function calcula(Funcionario $funcionario)
    {
        if ($funcionario->getSalario() > 2000) {
            return $funcionario->getSalario() * 0.75;
        }

        return $funcionario->getSalario() * 0.85;
    }
}

class CalculadoraDeSalario
{

    public function calcula(Funcionario $funcionario)
    {
        return $funcionario->getCargo()->getRegra()->calcula($funcionario);
    }
}


class Cargo
{
    private $regra;

    public function __construct(Regra $regra)
    {
        $this->regra = $regra;
    }

    public function getRegra()
    {
        return $this->regra;
    }
}

class Desenvolvedor extends Cargo
{
    public function __construct(DezOuVintePorcento $regra)
    {
        parent::__construct($regra);
    }
}

class Tester extends Cargo
{
    public function __construct(QuinzeOuVinteCincoPorcento $regra)
    {
        parent::__construct($regra);
    }
}

class Dba extends Cargo
{
    public function __construct(QuinzeOuVinteCincoPorcento $regra)
    {
        parent::__construct($regra);
    }
}

class Funcionario
{
    private $id;
    private $nome;
    private $cargo;
    private $dataAdmisao;
    private $salario;

    public function __construct($salario, Cargo $cargo)
    {
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCargo()
    {
        return $this->cargo;
    }

    public function getDataAdmisao()
    {
        return $this->dataAdmisao;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($novoNome)
    {
        $this->nome = $novoNome;
    }

    public function setDataAdmisao(DateTime $data)
    {
        $this->dataAdmisao = $data;
    }
}

$f = new Funcionario(4000, new Desenvolvedor(new DezOuVintePorcento()));
$c = new CalculadoraDeSalario();

echo $c->calcula($f);