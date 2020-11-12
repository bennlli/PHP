<?php
class Escuela{
    # Atributos conexión
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db_name = 'escuela';
    private $port = 3306;

    # Mensajes de conexción 
    private $men1 = '<h3>Conexion fallida</h3><br><hr>';
    private $men2 = '<h3>Conexion realizada exitosamente</h3><br><hr>';

    # Conexión
    private $conexion;
    
    # Propiedades para controlar errores
    private $error=false;

    function __construct(){
    $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name, $this->port);
        if ($this->conexion->connect_errno) {
            $this->error = true;
            echo $this->men1;
        }else{
            echo $this->men2;
        }
    }
    # Función para saber si hay error en la conexión
    function hayError(){
        return $this->error;
        
    }

    # Función para devolver los alumnos
    public function devolverAlumnos(){
        if(!$this->hayError()){
            $resultado = $this->conexion->query('SELECT nombre, apellido, edad FROM alumnos');
            return $resultado;
        }else{
            return null;
        }
    }

    # Función para insertar datos en la bbdd
    # Pasamos por parámetros los datos que equivalen al ingreso
    public function insertarAlumnos($nombre,$apellido,$edad){
        # Sentencia SQL para insertar datos nuevos en la bbdd
        $sqlInsert = "INSERT INTO alumnos(id,nombre,apellido,edad) VALUES (NULL, '".$nombre."', '".$apellido."', 18)";
        $this->conexion->query($sqlInsert);
        
    }
    # Función para actualizar datos en la bbdd
    # Pasamos por parámetros los datos 
    public function actualizarAlumnos($id,$nombre,$apellido,$edad){
        # Sentencia SQL para actualizar datos nuevos en la bbdd
        $sqlActualizacion = "UPDATE alumnos SET nombre='".$nombre."', apellido ='".$apellido."', edad ='".$edad." WHERE id =".$id;
        $this->conexion->query($sqlActualizacion);
    }
    # Función para borrar de datos en la bbdd
    # Pasamos por parámetros los datos 
    public function borrarAlumnos($id){
        # Sentencia SQL para actualizar datos nuevos en la bbdd
        if($this->error==false){
        $sqlBorrar = "DELETE FROM alumnos WHERE id=".$id;
        if(!$this->conexion->query($sqlBorrar)){
            echo 'Fallo al tratar de borrar: ('.$this->conexion->errno.')'.$this->conexion->error;
            return false;
        }
        return true;
    }else{
        return false;
        }
    }
}

?>