<?php
    namespace App; // Estabeleci o nomespace para que o autoload do composer funcione corretamente. Coloquei o nome igual o respectivo diretorio (nesse casso o diretório App) de acordo com a especificação PR4 (ela espera que o script contido dentro de um deteminado diretório esteja em um namespace compativel com o respectivo diretório )

    use MF\Init\Bootstrap;
    class Route extends Bootstrap {  // a ideia é apertir de index.php criar uma instancia  com base nessa classe

        /* Determinando as rotas que a aplicação possui*/
        protected function initRoutes(){ //metodo para 
            $routes['home'] = array(
                'route' => '/', // rota
                'controller' => 'indexController', //controlador
                'action' => 'index' // ação que devereá ser executada
            ); // associar um array que irá acionar o indexController como sendo seu respectivo controlador 

            $routes['sobre_nos'] = array(
                'route'=> '/sobre_nos',
                'controller' => 'indexController',
                'action' => 'sobreNos'
            );

            $this->setRautes($routes);

        }
    }
?>