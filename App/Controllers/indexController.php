<?php 
    namespace App\Controllers;

    class IndexController {

        public function index(){ // representam as actions dos controladores (esse por exemplo é o da home)
            echo 'cheamgos ao IndexController e disparamos a action index';
        }

        public function sobreNos(){ 
            echo 'cheamgos ao IndexController e disparamos a action sobreNos';

        }
    }


?>