<?php
    require_once 'core/ConexionPDO.php';

    class CategoriaModel extends ConexionDB {
        public $idCategoria;
        public $nombre;
        public $tipoCategoria;


        public function lista(){
            $this->setQuery("SELECT id_categoria, categoria
                            FROM categorias");

            $resultado = $this->obtenerRow();
            return $resultado;
        }



        public function guardar(){
            $this->setQuery("INSERT INTO categorias(categoria, tipoCategoria)
                            VALUES(:categoria, :tipoCategoria)");
            $this->ejecutar(array(
                ':nombre' => $this->nombre,
                ':tipoCategoria' => $this->tipoCategoria
            ));
        }

        public function eliminar(){
            $this->setQuery("DELETE FROM categorias
                             WHERE id_categoria = :idCategoria");
            
            $this->ejecutar(array(
                ':idCategoria' => $this->idCategoria,
            ));
        }


        public function actualizar(){
            $this->setQuery("UPDATE categorias
                            SET categoria = 'otra cosa'
                            WHERE id_categoria = :idCategoria");
            $this->ejecutar(array(
                            ':idCategoria' => $this->idCategoria,
            ));               
        }

    }
?>