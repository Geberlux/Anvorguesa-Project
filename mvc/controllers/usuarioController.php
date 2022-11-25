<?php
    class UsuarioController{
        public $nombre;
        public $apellido;
        public $password;
        public $email;

        public function index( $parametros = array() ){
            require_once('views/header.html');

            require_once('views/loginView.php');
     
            require_once('views/footer.html');

        }

        public function login($parametros = array()){
            if(  isset( $_POST['email'] )  && isset( $_POST['clave'] )){
                $email = $_POST['email'];
                $clave = $_POST['clave'];

                echo $email;

            }

        }

        public function crear( $parametros = array() ){
            // Recibo las variables por POST
            print_r( $parametros  );
            echo 'Crear usuario';

            // Intancio el modelo 

            // Ejecuto las querys
        }

        public function actualizar($parametros = array()){
            print_r( $parametros  );
            echo 'Actulizando';
        }

        public function eliminar( $parametros = array() ){
            print_r( $parametros  );
            echo 'Eliminando usuario';
        }
    }

?>