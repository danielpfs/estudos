<?php
namespace TemplateMethod\Exercicio;

class RelatorioSimples extends TemplateRelatorio
{
    protected function cabecalho()
    {
        echo 'UmBanco - 1234-1234 <br>';
    }

    protected function corpo(Conta $conta)
    {
        echo '------------------------------<br>';        
        echo 'Titular: '.$conta->getTitular().'<br>';
        echo 'Saldo: '.$conta->getSaldo().'<br>';
        echo '------------------------------<br>';        
    }

    protected function rodape()
    {
        echo 'UmBanco - 1234-1234 <br>';                
    }
}