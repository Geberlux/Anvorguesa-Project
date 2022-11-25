<?php
    require_once 'core/ConexionPDO.php';

    class UsuarioModel extends ConexionDB {
        public $idUsuario;
        public $nombre;
        public $apellido;
        public $email;
        public $password;

        public function guardar(){
            $this->setQuery("INSERT INTO usuarios(nombre, apellido, email, password)
                            VALUES(:nombre,:apellido, :emial, :passsword)");
            $this->ejecutar(array(
                ':nombre' => $this->nombre,
                ':apellido' => $this->apellido,
                ':email' => $this->email,
                ':password' => $this->password
            ));
        }

        public function eliminar(){
            $this->setQuery("DELETE usuario
                             WHERE idUsuario = :idUsuario");
            
            $this->ejecutar(array(
                ':idUsuario' => $this->idUsuario,
            ));
        }

        public function login(){
            $this->setQuery("SELECT idUsuario, nombre, email
                             WHERE email = :email AND password = :password");
            $this->obtenerRow(array(
                        ':email' => $this->email,
                        ':password' => $this->password
            ));
        }

        

    }
?>