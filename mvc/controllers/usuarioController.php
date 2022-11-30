<?php

   include("../MVC/models/usuarioModel.php");
   class UsuarioController{
        public $nombre;
        public $apellido;
        public $contrasenia;
        public $correo;
        public $dni;
        public $rol_id_rol;

        

        public function index( $parametros = array() ){
          
            require_once('views/header.php');
            
            require_once('views/login.html');
     
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
            header('Location: ../index');
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
            session_start();
            //print_r($_SESSION);
            $correo = $_SESSION['correo'];
            $rol_id_rol = $_SESSION['rol_id_rol'];
            //$id_usuario = $_SESSION['id_usuario'];
            
            
            if(isset ($_POST ['nombre']) && isset ($_POST ['apellido']) && isset ($_POST ['contrasenia'])) {
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];                
                $contrasenia = $_POST['contrasenia']; 
                
                
                $usuarioModificar = new usuarioModel();
                $usuarioModificar -> setNombre($nombre);
                $usuarioModificar -> setApellido($apellido);
                $usuarioModificar -> setCorreo($correo);
                $usuarioModificar -> setContrasenia($contrasenia);
                

                $usuarioModificar -> modificar();
                //print_r ($usuarioModificar);
                
            }   
            echo('<meta http-equiv="refresh" content="3; url=../index.php">');
            echo( '<h2> Cuenta Modificada, en 3 segundo...</h2>');      
        }
      

        public function eliminar( $parametros = array() ){
            print_r( $parametros  );
            echo 'Eliminando usuario';
        }
    }

?>
