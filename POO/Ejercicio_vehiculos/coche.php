<?php
class Coche extends Cuatro_ruedas{
    private $num_cadenas_nieve;

    function __construct(){
        $this->num_cadenas_nieve = 0;
    }
    
function añadir_cadenas($poner){
    $total_cadenas = $poner + $this->num_cadenas_nieve;
    echo 'Hemos puesto '.$total_cadenas.' cadenas.<br>';
}
function quitar_cadenas(){
    echo 'Hemos quitado las cadenas.<br>';
}

}
?>