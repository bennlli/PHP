<?php 
# Incluimos la conexión.
include_once 'nba_db.php';

# Creamos la clase con su herencia del padre.
class Resultados extends Nba{
    # Contructor para la conexión.
    function __construct(){
        parent::__construct();
    }

# Selecionar equipo y ver sus resultados con respecto a otro 
    # Función para recofer los nombres y pasarlos al option.
    public function valoresOption(){
         # Creamos la consulta.
         $sql = 'SELECT * FROM equipos'; 
         # Almacenamos los resultados en la función.
         $resultado = $this->consultas($sql); 
             if($resultado!=null){
                 # Creamos un array vacío.
                 $tabla=[];
                 # foreach para recorrer la consulta
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
        $sql = "SELECT * FROM partidos WHERE equipo_local = '$equipo'"; 
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