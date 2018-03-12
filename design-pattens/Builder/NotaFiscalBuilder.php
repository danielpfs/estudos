<?php
namespace Builder;

class NotaFiscalBuilder
{
    private $itens;
    private $razaoSocial;
    private $cnpj;
    private $valorBruto;
    private $impostos;
    private $data;
    private $observacao;

    public function __construct()
    {
        $this->valorBruto = 0;
        $this->impostos = 0;
        $this->data =  date('Y-m-d h:i:s');
    }

    public function comRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    public function comObservacao($observacao)
    {
        $this->observacao = $observacao;
    }


    public function noCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function nadata($data = null)
    {
        $this->data = $data;
    }

    public function com(Item $item)
    {
        $this->itens[] = $item;
        $this->valorBruto+= $item->getValor();
        $this->impostos+= $item->getValor() * 0.02;
    }

    public function build()
    {
        return new NotaFiscal($this->itens, $this->razaoSocial, $this->cnpj, $this->valorBruto, $this->impostos, $this->observacao, $this->data);
    }

}