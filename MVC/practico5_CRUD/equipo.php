<?php
include 'db.php';
class Equipo extends dbNBA{
        # Contructor para la conexión.
        function __construct(){
            parent::__construct();
        }
    # Función para insertar equipos
    public function insertar_equipo($nombre_e,$ciudad_e,$conferencia_e,$division_e){
        $men = '<h3>Inserción de datos exitosa.</h3><br>';
    
        # Creamos la consulta para insertar.
        $sql = " INSERT INTO equipos(Nombre, Ciudad, Conferencia, Division) 
        VALUES ('".$nombre_e."','".$ciudad_e."','".$conferencia_e."','".$division_e."')";
        $resultadoEquipo = $this->consultas($sql);
        echo $men;
        return $resultadoEquipo;

    }

    # Función para actualizar
    public function actualizar_equipo($nombre_e, $ciudad_e, $conferencia_e, $division_e){
        $men = '<h3>Actualización de datos exitosa.</h3><br>';
    
        # Creamos la consulta para insertar.
        $sql = " UPDATE equipos 
        SET Nombre='.$nombre_e.', Ciudad='.$ciudad_e.', Conferencia='.$conferencia_e.', Division='.$division_e.'";
        $resultadoEquipo = $this->consultas($sql);
        echo $men;
        return $resultadoEquipo;
    }
    //Funcion para Borrar Equipo
    public function borrarEquipo($nombre_e){
        # Creamos la consulta.
        $sql="DELETE FROM equipos Where Nombre='$nombre_e'";
        # Almacenamos los resultados de la función.
        $resultado = $this->consultas($sql);
        return $resultado;
    }
}
?>