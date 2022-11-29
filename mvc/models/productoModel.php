<?php
    require_once 'core/ConexionPDO.php';

    class ProductoModel extends ConexionDB {

        public $id_producto;
     
        public function listar(){
            $this->setQuery("SELECT id_producto,nombre_prod,precio,img,descripcion 
                            FROM producto;");
            $resultado = $this->obtenerRow();
            return $resultado;

        }

        public function guardar(){
            $this->setQuery("");
            $this->ejecutar(array(
                
            ));
        }

        
    }
?>