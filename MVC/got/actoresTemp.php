<?php 
include 'thronesDB.php';

# Creamos la nueva clase con su herencia del padre.
class ActoresTemp extends Got{
    # Llamamos al constructor para la conexión.
    function __construct(){
        parent::__construct();
    }

# Funcion oara devolver los actores necesarios
public function devolverActoresSeason(){
    # Creamos la consulta general de la tabla para luego especificar en el 'index' que necesitamos.
    $sql = "SELECT * FROM season_ep";
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

# Funcion oara devolver los actores necesarios
public function devolverActoresSeasonOption($episodio){
    # Creamos la consulta general de la tabla para luego especificar en el 'index' que necesitamos.
    $sql = "SELECT * FROM season_ep WHERE episode = '$episodio'";
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

# Instanciamos el objeto
$actoresTemp = new ActoresTemp();
# Llamos la funcion para que nos retorne el resultado de la búsqueda.
    $resultadoTemp = $actoresTemp->devolverActoresSeason();
    # Con el Foreach sacamos el resultado.
    foreach ($resultadoTemp as $filaTemp){
        echo $filaTemp['serie_name'].', Nº de season '.$filaTemp['episode'].'<br>';
    }



?>