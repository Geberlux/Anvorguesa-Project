<?php

   
    require_once('models/contactoModel.php');


    class ContactoController{
        public $nombre;
        public $idProducto;


        public function index( $parametros = array() ){
            session_start();
            //print_r($_SESSION);
            $correo = $_SESSION['correo'];
            $producto = new ContactoModel();
            $listaProductos = $producto->listar();

            require_once('views/header.php');
            require_once('views/contacto.php');
            require_once('views/footer.html');


        }


        public function listar( $parametros = array() ){
            echo 'Ahora vamos a listar la categoria ';
            print_r($parametros);


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