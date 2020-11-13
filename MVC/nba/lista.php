<?php
# Incluimos la conexión.
include_once 'nba_db.php';

# Creamos la clase con su herencia del padre.
class Lista extends Nba{
    # Contructor que hereda la conexción.
    function __construct(){
        parent::__construct();
    }

    function voloresOpt(){
        # Creamos la consulta.
        $sql = 'SELECT * FROM jugadores';
        # Almacenamos los resultados en la función.
        $resultado = $this->consultas($sql);
            if($resultado!=null){
                # Creamos el array vacío.
                $tabla=[];
                # Foreach para recorrer la consulta.
                foreach ($resultado as $fila){
                    # Almacenamos los datos en el array para retornarlo.
                    $tabla[]=$fila;
                }return $tabla;
            }else{
                return null;
            }
    }
        # Función para devolver el resultado de los equipos.
        public function devolverResultado($equipo){
            # Creamos la consulta.
            $sql = "SELECT * FROM jugadores WHERE Nombre_equipo = '$equipo'"; 
            # Almacenamos los resultados en la función.
            $resultado = $this->consultas($sql); 
                if($resultado!=null){
                    # Creamos un array vacío.
                    $tabla=[];
                    # foreach para recorrer la consulta
                    foreach ($resultado as $fila){
                        # Almacenamos los datos en el array
                        $tabla[]=$fila;
                    }return $tabla;
                }else{
                    return null;
                }        
            }


}


?>
