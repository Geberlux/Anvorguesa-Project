<?php
    class indexController{

        public function index(){
            require_once('views/header.html');
            require_once('views/home.html');
            
            //echo '<h1> Home del controller</h1>';
            require_once('views/footer.html');

        }

        public function loguear(){
            echo '<h2> inciando login</h2>';
        }

        public function logout(){
            echo '<h2> Finalizando sesion</h2>';
        }

    }


?>