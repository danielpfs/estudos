<?php
namespace SingletonAndFacade;

class ExampleFacade
{
    // Cria uma fachada para que outros desenvolvedores possam
    // utilizar sem a necessidade de saber como funciona o sistema.

    public function getConnection($host, $user, $pass)
    {
        /*
         * return new ConnectDB($host, $user, $pass, 'database', 3333);
         */

        return 'Connection';
    }

    public function getOrder($nome)
    {
        /*
         * return new Order($nome, 0);
         *
         */

        return 'Order';
    }
}