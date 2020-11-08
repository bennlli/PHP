<?php
class Cuatro_ruedas extends Vehiculo{
    private $puertas;

    function __construct(){
        $this->puertas = 5;
    }
function numero_puertas(){
    echo 'El numero de puertas es '.$this->puertas.'.<br>';

}
function repitnar($color){
    $this->color = $color;
    echo 'El color del coche ahora es '.$color.'.<br>';
    
}

}
?>