<?php 

    class Nba{
        # Atributos de la conexión.
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db_name = 'liganba';
        private $port = '3306';

        # Mensaje de conexión.
        private $men1 = '<h3>Conexión fallida.<hr></h3>';
        private $men2 = '<h3>Conexión realizada exitosamente.<hr></h3>';

        # Conexión.
        private $conexion;

        # Error
        private $error = false;

        # Constructor con la declaración de la conexión.
        function __construct(){
            $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->port);
            if($this->conexion->connect_errno){
                $this->error = true;
                echo $this->men1;
            }else{
                echo $this->men2;
            }
        }
        # Función para saber si hay error en la conexión.
        function error(){
            return $this->error;
        }
    # Función genérica para crear consultas.
    public function consultas($consulta){
        if(!$this->error()){
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        }else{
            return null;
            }
        }   

    }

?>