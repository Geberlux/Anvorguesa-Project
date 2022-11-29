<?php

   include("../MVC/models/usuarioModel.php");
   class UsuarioModificarController{
        public $nombre;
        public $apellido;
        public $contrasenia;
        public $correo;
        public $dni;
        public $rol_id_rol;

        

        public function index( $parametros = array() ){
            session_start();
            //print_r($_SESSION);
            $correo = $_SESSION['correo'];
           
            require_once('views/header.php');
            
            require_once('views/usuariomodificarView.php');
     
            require_once('views/footer.html');
            
        }



        public function login($parametros = array()){
               
         // Recibo las variables por POST
        $correo = $_POST['correo'];
        $contrasenia = $_POST['contrasenia'];
         // Intancio el modelo 
        $usuario = new usuarioModel();
        $usuario->correo = $correo;
        $usuario->contrasenia = $contrasenia ;
        //echo (  sha1('admin') );
        // Ejecuto el method del modelo
        $resultado = $usuario->login();
        print_r($resultado[0]);
        print_r($usuario);
       
        if( count( $resultado ) > 0  ) {
            echo 'Datos validos';
            session_start();
            $_SESSION['correo'] = $resultado[0]['correo'];
            $_SESSION['nombre'] = $resultado[0]['nombre'];
            $_SESSION['rol_id_rol'] = $resultado[0]['rol_id_rol'];
            echo 'logueado';
            header('Location: ../index.php');
               } else {
               echo 'Usuario o contraseña invalidos';
                }

        }
    

        public function logout( $parametros = array() ){
            session_start();
            unset( $_SESSION['correo'] );
            unset( $_SESSION['rol_id_rol'] );
            session_unset();
            session_destroy();
            echo('<meta http-equiv="refresh" content="3; url=../index.php">');
            echo( '<h2> Sesion cerrada, en 3 segundo...</h2>');

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