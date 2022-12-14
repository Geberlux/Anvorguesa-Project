<?php
 require_once 'core/ConexionPDO.php';

 class UsuarioregistrarModel extends ConexionDB {
     public $idUsuario;
     public $nombre;
     public $apellido;
     public $correo;
     public $contrasenia;
     public $dni;
     public $rol_id_rol;

     public function guardar(){
         $this->setQuery("INSERT INTO usuario(nombre, apellido, correo, contrasenia, dni , rol_id_rol)
                         VALUES(:nombre,:apellido,:correo,:contrasenia,:dni ,'2')");
         $this->ejecutar(array(
             ':nombre' => $this->nombre,
             ':apellido' => $this->apellido,
             ':correo' => $this->correo,
             ':contrasenia' => $this->contrasenia,
             ':dni' => $this->dni
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
         $this->setQuery("SELECT correo, contrasenia,rol_id_rol
         FROM usuario
         WHERE correo = :correo AND contrasenia = :contrasenia;");
         $resultado = $this->obtenerRow(array(
         ':correo' => $this->correo,
         ':contrasenia' => $this->contrasenia
         ));

         return $resultado;
     }

     public function getNombre() {
         return $this->nombre;
     }
     public function setNombre($nombre) {
         $this->nombre = $nombre;
     }

     public function getApellido() {
         return $this->apellido;
     }
     public function setApellido($apellido) {
        $this->apellido = $apellido;
     }
     public function getCorreo() {
         return $this->correo;
     }
     public function setCorreo($correo) {
        $this->correo = $correo;
     }
     public function getContrasenia() {
         return $this->contrasenia;
     }
     public function setContrasenia($contrasenia) {
        $this->contrasenia = $contrasenia;
     }
     public function getDni() {
         return $this->dni;
     }
     public function setDni($dni) {
        $this->dni = $dni;
     }
     public function getRol_id_rol() {
         return $this->rol_id_rol;
     }
     public function setRol_id_rol($rol_id_rol) {
        $this->rol_id_rol = $rol_id_rol;
     }
    

     

 }
?>