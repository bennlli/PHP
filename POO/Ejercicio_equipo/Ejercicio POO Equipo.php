<?php 
#Definimos la clase a usar.
class Equipo extends Jugador{

    # Método donde añadiremos jugadores al 'ARRAY'
    function addJug(){
        for ($puntos=1; $puntos < 10; $puntos++) { 
        echo 'Los dorsales del equipo son: ' .$puntos. '<br>';
        }
    }


}
?>