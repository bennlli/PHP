<?php 
# Clase declarada
include 'dbNBA.php';

class Equipo{
    # Atributos
    private $equipo;
    # Constructor
    function __construct(){
        $this->equipo ="";
    }

    # GETTERS para obtener
    public function getEquipo(){
        return $this->equipo;
    }
    # SETTERS para modificar
    public function setEquipo($equipo){
        $this->equipo = $equipo;
        return $this;
    }

    # Función para devolver el resultado del equipo.
    function devolverEquipo(){
        $equipo = $_POST['equipo'];
        # Creamos la consulta.
        $sql = "SELECT * FROM equipos WHERE Nombre = $equipo";
        # Almacenamos los resultados de la función.
        $resultadoEquipo = $this->$sql; 
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