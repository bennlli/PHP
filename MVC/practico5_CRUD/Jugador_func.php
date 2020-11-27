<?php

class Jugador extends dbNBA{
    function __construct(){
        parent::__construct();
     
    }

# Función para insertar datos en la bbdd
# Pasamos por parámetros los datos que equivalen al ingreso
public function insertar_jugador($nombre,$procedencia,$altura, $peso,$posicion,$equipo){
    # Sentencia SQL para insertar datos nuevos en la bbdd
    $sqlInsert = "INSERT INTO alumnos(id, Nombre, Procedencia, Altura, Peso, Posicion, Nombre_equipo) 
    VALUES (NULL, '".$nombre."', '".$procedencia."','".$altura."', '".$peso."','".$posicion."','".$equipo."')";
    $this->conexion->query($sqlInsert);
    
}
# Función para actualizar datos en la bbdd
# Pasamos por parámetros los datos 
public function actualizar_jugador($nombre,$procedencia,$altura, $peso,$posicion,$equipo){
    # Sentencia SQL para actualizar datos nuevos en la bbdd
    $sqlActualizacion = "UPDATE jugadores SET  Nombre ='".$nombre."', Procedencia ='".$procedencia."', Altura ='".$altura."', Peso ='".$peso."', Posicion ='".$posicion."', Equipo ='".$equipo." WHERE Nombre =".$nombre;
    $this->conexion->query($sqlActualizacion);
}
# Función para borrar de datos en la bbdd
# Pasamos por parámetros los datos 
public function borrar_jugadores($nombre){
    # Sentencia SQL para actualizar datos nuevos en la bbdd
    if($this->error==false){
    $sqlBorrar = "DELETE FROM jugadores WHERE Nombre='.$nombre.'";
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