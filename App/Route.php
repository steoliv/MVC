<?php
    namespace App; // Estabeleci o nomespace para que o autoload do composer funcione corretamente. Coloquei o nome igual o respectivo diretorio (nesse casso o diretório App) de acordo com a especificação PR4 (ela espera que o script contido dentro de um deteminado diretório esteja em um namespace compativel com o respectivo diretório )

    class Route {  // a ideia é apertir de index.php criar uma instancia  com base nessa classe
        /* Determinando as rotas que a aplicação possui*/
        public function initRoutes(){ //metodo para 
            $routes['home'] = array(
                'route' => '/', // rota
                'controller' => 'indexController', //controlador
                'action' => 'index' // ação que devereá ser executada
            ); // associar um array que irá acionar o indexController como sendo seu respectivo controlador 

            $routes['sobre_nos'] = array(
                'route'=> '/sobre_nos',
                'controller' => 'indexController',
                'action' => '/sobre_nos'
            );

        }
        public function getUrl(){ //função para retornar a url corrnte do usuário, ou seja, vai exibir qual é o acesso que ele está usando através no navegador 
            return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); /* parse_url é uma função que recebe uma url e interpreta, depois ela retorna seus respectivos components.  
            A  $_SERVER é uma superglobal que um array, retorna todos os detalhes do servidor da nossa aplicação . PHP_URL_PATH que submetida para parse_url, faz com que o retorno seja apenas a 
            string  relativa ao path */
          }
    }
?>