<?php
    # Clase para establecer la conexión.
    class dbNBA{
        # Atributos de la conexión.
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db = 'liganba';
        private $port = '3306';
        
        # Mensajes de la conexión.
        private $men1 = '<h3>Conexión fallida</h3>';
        private $men2 = '<h3>Conexión realizada exitosamente</h3><hr>';
        
        # Conexión.
        private $con;

        # Error.
        private $error = false;

        # Constructor con la declaración de la conexión.
        function __construct(){
            $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db,$this->port);
            if($this->con->connect_errno){
                $this->error=true;
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
            $resultado = $this->con->query($consulta);
            return $resultado;
        }else{
            return null;
            }
        }  
    
    # Función para devolver el resultado del equipo.
    function devolverEquipo($team){
        # Creamos la consulta.
        $sql = "SELECT * FROM equipos WHERE Nombre = '$team'";
        # Almacenamos los resultados de la función.
        $resultadoEquipo = $this->consultas($sql); 
            if($resultadoEquipo!=null){
                # Creamos el array
                $tabla =[];
                # Foreach para recorrer la tabla
                foreach ($resultadoEquipo as $fila){
                    # Almacenamos los datos en el array
                    $tabla[]=$fila;
                }return $tabla;
            }else{
                return null;
            }
    }
}
?>