<?php 
    namespace App\Controllers;

    class IndexController {

        public function index(){ // representam as actions dos controladores (esse por exemplo é o da home)
            echo 'chegamgos ao IndexController e disparamos a action index <br/>';
        }

        public function sobreNos(){ 
            echo 'chegamgos ao IndexController e disparamos a action Sobre Nós';

        }
    }


?>