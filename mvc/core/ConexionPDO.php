<?php
    class ConexionDB{
        private $server_name = 'localhost';
        private $name_db = 'anvorguesa';
        private $user_db = 'root'; 
        private $user_pass = '';
        private $objPDO;
        private $query = '';
        public $estado = '';
        protected $rows = array();

        function __construct(){
            $this->conectar();
        }

        // Set Query
        public function setQuery($query){
            $this->query = $query;
        }
        // Ejecutar Query
        public function ejecutar($array){
            try {
                //code...
                $consulta = $this->objPDO->prepare($this->query);
                $consulta->execute($array);
                $this->estado = 'Conectado';

            } catch (PDOException $e) {
                $this->estado = 'Error: ' . $e->getMessage() ;
                echo "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }


        // Get Rows
        public function obtenerRow($array=array()){
            try {
                $consulta = $this->objPDO->prepare($this->query);
                $consulta->execute($array);
                $this->rows = $consulta->fetchAll(PDO::FETCH_ASSOC);
                return $this->rows;
            } catch (PDOException $e) {
                $this->estado = 'Error: ' . $e->getMessage() ;
                echo "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }
        // Conectar a la DB
        private function conectar(){
            try {
                $this->objPDO =  new PDO("mysql:host=$this->server_name;dbname=$this->name_db", $this->user_db, $this->user_pass);
                $this->estado = 'Conectado';
            } catch (PDOException $e) {
                $this->estado = 'Error: ' . $e->getMessage() ;

                echo "¡Error!: " . $e->getMessage() . "<br/>";
                die();
            }

        }

        // Desconecar DB
        private function desconectar(){
            $this->objPDO = null;
        }


    }
?>