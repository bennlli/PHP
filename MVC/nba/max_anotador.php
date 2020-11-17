<?php
# Incluimos la conexión.
include_once 'nba_db.php';

# Creamos la clase con su herencia del padre.
class Lista extends Nba{
    # Contructor que hereda la conexción.
    function __construct(){
        parent::__construct();
    }

$sql ="SELECTMAX(e.Puntos_por_partido) AS puntuacion,j.nombre, j.Nombre_equipo
FROM estadisticas e, jugadores j WHEREe.temporada='" . $arrayTemporadas[$i] . "'
ANDe.jugador=j.codigoGROUP BY jugador ORDER BY puntuacion DESCLIMIT1";

$arrayTemporadas =$this->obtenerTemporadas();

    public function obtenerTemporadas(){
        $arrayTemporadas = [];
        $sql ="SELECT DISTINCT temporada FROM estadisticas ORDER BY temporada";
        $resultado =$this->realizarConsulta($sql);
            if ($resultado !=null) {​​​​​​​​​​​​​​
            while ($fila = $resultado->fetch_assoc()) {​​​​​​​​​​​​​​
            # Como sólo queremos el registro que pertenece a las temporadas, se indica en el campo de $fila
                            $arrayTemporadas [] = $fila['temporada'];
                        }​​​​​​​​​​​​​​
            return $arrayTemporadas;
                    }​​​​​​​​​​​​​​ else {​​​​​​​​​​​​​​
            returnnull;
                    } 
    }
}
?>
