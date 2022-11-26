<?php
    include("../MVC/models/usuarioregistrarModel.php");
    class UsuarioRegistrarController{
        public $nombre;
        public $apellido;
        public $contrasenia;
        public $correo;
        public $dni;
        public $id_rol_id_rol;

        public function index( $parametros = array() ){
            require_once('views/header.php');

            require_once('registrar.php');
     
            require_once('views/footer.html');

        }


        public function crear( $parametros = array() ){
            if(isset ($_POST ['nombre']) && isset ($_POST ['apellido']) && isset ($_POST ['correo']) && isset ($_POST ['contrasenia']) && isset ($_POST ['dni']) ){
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido']; 
                $correo = $_POST['correo']; 
                $contrasenia = $_POST['contrasenia']; 
                $dni = $_POST['dni']; 
                
                $usuarioRegistro = new usuarioregistrarModel();
                $usuarioRegistro -> setNombre($nombre);
                $usuarioRegistro -> setApellido($apellido);
                $usuarioRegistro -> setCorreo($correo);
                $usuarioRegistro -> setContrasenia($contrasenia);
                $usuarioRegistro -> setDni($dni);

                $usuarioRegistro -> guardar();
                //print_r ($usuarioRegistro);
                echo('<meta http-equiv="refresh" content="3; url=../index.php">');
                echo( '<h2> Cuenta Creada, en 3 segundo...</h2>');
            }
        }


    }

?>