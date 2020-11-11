<?php
class Escuela{
    # Atributos conexión
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db_name = 'escuela';
    private $port = 3306;

    # Conexión
    private $conexion;
    
    # Propiedades para controlar errores
    private $error=false;

    function __construct(){
    $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->port);
        if ($this->conexion->connect_errno) {
            $this->error = true;
            
                    }
    }
    # Función para saber si hay error en la conexión
    function hayError(){
        return $this->error;
        
    }

    # Función para devolver los alumnos
    public function devolverAlumnos(){
        if(!$this->hayError()){
            $resultado = $this->conexion->query('Select nombre, apellido, edad FROM alumnos');
            return $resultado;
        }else{
            return null;
        }
    }
    
}

?>