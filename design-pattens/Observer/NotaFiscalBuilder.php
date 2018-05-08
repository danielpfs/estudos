<?php
namespace Observer;

class NotaFiscalBuilder
{
    private $itens;
    private $razaoSocial;
    private $cnpj;
    private $valorBruto;
    private $impostos;
    private $data;
    private $observacao;
    private $acoes;

    public function __construct()
    {
        $this->valorBruto = 0;
        $this->impostos = 0;
        $this->itens = [];
        $this->acoes = [];
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

    public function addAcao(AcaoAposNota $acao)
    {
        $this->acoes[] = $acao;
    }

    public function com(Item $item)
    {
        $this->itens[] = $item;
        $this->valorBruto+= $item->getValor();
        $this->impostos+= $item->getValor() * 0.02;
    }

    public function build()
    {
        $nf = new NotaFiscal($this->itens, $this->razaoSocial, $this->cnpj, $this->valorBruto, $this->impostos, $this->observacao, $this->data);

        foreach ($this->acoes as $acao) {
            $acao->executa($nf);
        }

        return $nf;
    }
}