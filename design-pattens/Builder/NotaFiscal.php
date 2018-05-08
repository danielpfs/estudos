<?php
namespace Builder;

class NotaFiscal
{
    private $itens;
    private $razaoSocial;
    private $cnpj;
    private $valorBruto;
    private $impostos;
    private $data;
    private $observacao;

    public function __construct($itens, $razaoSocial, $cnpj, $valorBruto, $impostos, $observacao, $data)
    {
        $this->itens = $itens;
        $this->razaoSocial = $razaoSocial;
        $this->cnpj = $cnpj;
        $this->valorBruto = $valorBruto;
        $this->impostos = $impostos;
        $this->observacao = $observacao;
        $this->data = $data;
    }
}