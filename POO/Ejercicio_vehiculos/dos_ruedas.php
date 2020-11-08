<?php
class Dos_ruedas extends Vehiculo{
    private $cv;

    function __construct(){   
        $this->cv=49;
    }
    

function cilindrada(){
echo 'La cilindrada del vehiculo es de '.$this->cv.'cv.<br>';

}
function poner_gasolina($litros,$peso){
    $peso_total = $litros +$peso;
    echo 'El peso total es de '.$peso_total.'kg<br>';
}

}
?>