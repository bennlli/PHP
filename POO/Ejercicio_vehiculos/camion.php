<?php
class Camion extends Cuatro_ruedas{
private $longitud;

function __construct(){
    $this->longitud = 100;
}

function mostrar_longitud(){
    echo 'El largo del remolque es de '.$this->longitud.'<br>';
    
}
function añadir_remolque($longitud_remolque){
    $longitud_remolque = $this->longitud;
    echo 'La longitud actual es de '.$longitud_remolque.'cm<br>';
}
}
?>