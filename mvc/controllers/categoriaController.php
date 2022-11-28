<?php

    require_once('models/categoriaModel.php');

    class CategoriaController{
        public $nombre;
        public $idCategoria;


        public function index( $parametros = array() ){
            $categoria = new CategoriaModel();
            $lista = $categoria->lista();

            require_once('views/header.html');
            require_once('views/categoriaABMView.php');
            require_once('views/footer.html');

            // print_r($lista);
            //echo '<h1> Renderizo Vista</h1>';
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