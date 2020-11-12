<?php 
include 'thronesDB.php';

# Creamos la clase nueva con su herencia del padre.
class Actores extends Got{
    # Llamos al constructor para la conexión.
    function __construct(){
        parent::__construct();
    }
    
# Función para devolver los actores necesarios.
public function devolverActores(){
    # Creamos la consulta.
    $sql = "SELECT * FROM cast";
    # Creamos la variable donde almacenamos la consulta con la función.
    $resultado = $this->consultas($sql);

    if($resultado!= null){
        # Creamos el array
        $tabla=[];
        # While para imprimir el resultado junto con el fetch_assoc
        while($fila=$resultado->fetch_assoc()){
            
            $tabla[]=$fila;
        }
        return $tabla;
    }else{
        return null;
    }
}

}
?>