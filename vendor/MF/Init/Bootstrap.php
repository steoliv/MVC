<?php 

namespace MF\Init;

abstract class Bootstrap { //classe abstrata

    private $routes;

    abstract protected  function initRoutes(); // Método abstrato , significa que quando herdado por uma classe filha, deverá ser implementado na classe filha

    //criar um metodor construtor que será executado no momento em que a instancia do objeto for feita com base nsessa classe (classe routes, no caso)
    public function __construct() {
        $this->initRoutes(); //executar o metodo initRoutes
        $this->run($this->getUrl()); //Executar o metodo run e dentro dele o getUrl (esse exibe o path executado pelo usuário)
    }
     
    // criar metodo get e set para manipular o atributo routes
    public function getRoutes(){
        return $this->routes;
    }

    public function setRautes(array $routes){
        $this->routes = $routes;
    }

    protected function run($url){ //  executar a instancia didamica do objeto e a execução do metodo dentro do objeto
        foreach($this->getRoutes() as $key => $route){
             if($url == $route['route']){
               $class = "App\\Controllers\\".ucfirst($route['controller']);

               $controller = new $class;

               $action = $route['action'];

               $controller->$action();

             }
       }
    }

    protected function getUrl(){ //função para retornar a url corrnte do usuário, ou seja, vai exibir qual é o acesso que ele está usando através no navegador 
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH); /* parse_url é uma função que recebe uma url e interpreta, depois ela retorna seus respectivos components.  
        A  $_SERVER é uma superglobal que um array, retorna todos os detalhes do servidor da nossa aplicação . PHP_URL_PATH que submetida para parse_url, faz com que o retorno seja apenas a 
        string  relativa ao path */
    }


}

?>