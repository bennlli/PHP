<?php

class Got{
    # Atributos conexión.
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db_name = 'gameofthrones';
    private $port = '3306';

    # Mensajes de conexión.
    private $men1 = '<h3>Conexión fallida.</h3><hr>';
    private $men2 = '<h3>Conexión realizada exitosamente.</h3><hr>';

    # Conexión.
    private $conexion;

    # Propiedades para controlar errores.
    private $error = false;
    
    # Contructor donde se declara la conexión.
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
    function hayError(){
        return $this->error;
    }


    # Función generica para crear consultas.
    public function consultas($consulta){
        if(!$this->hayError()){
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        }else{
            return null;
            }
        }
}


?>