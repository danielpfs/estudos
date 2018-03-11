<?php
namespace TemplateMethod\Exercicio1;

class RelatorioComplexo extends TemplateRelatorio
{
    protected function cabecalho()
    {
        echo '------------------------------<br>';
        echo 'Banco: UmBanco <br>';
        echo 'Endereço: Q1 Lote2 Leste <br>';
        echo 'Telefone: 1234-1234 <br>';
        echo '------------------------------<br>';
    }

    protected function corpo(Conta $conta)
    {
        echo '------------------------------<br>';        
        echo 'Titular: '.$conta->getTitular().'<br>';
        echo 'Agência: '.$conta->getAgencia().'<br>';
        echo 'Numero da Conta: '.$conta->getNumConta().'<br>';
        echo 'Saldo: '.$conta->getSaldo().'<br>';
        echo '------------------------------<br>';        
    }

    protected function rodape()
    {
        echo '------------------------------<br>';
        echo 'Email: umbanco@mail.com <br>';
        echo date('d/m/Y').'<br>';
        echo '------------------------------<br>';        
    }
}