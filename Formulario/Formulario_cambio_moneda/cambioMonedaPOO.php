<?php

# Definicione de la clase
class conversion{
    private $euros = 0;

    #           'GETTERS'
public function getEuros(){
    return $this->euros;
    }
#           'SETTERS'
public function setEuros($euros){
    $this->euros = $euros;
    }
# Funcion para hacer el cambio de moneda
public function converEurosLibra(){
    $valorLibra= 0.90;
    $libra=($this -> euros*$valorLibra);
    return $libra;
    }
}
?>