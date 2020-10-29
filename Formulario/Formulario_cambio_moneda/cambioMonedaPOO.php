<?php

# Definicione de la clase
class conversion{
    private $euros;


#           'CONSTRUCTOR'
# Introducimos los atributos como queramos denominarlos en el constructor.
function __construct($euros){
    $this -> SetEuros($euros);
    }

#           'GETTERS'
public function getEuros(){
    return $this->euros;
    }
#           'GETTERS'
public function setEuros($euros){
    $this->euros = $euros;
    return $this;
    }
# Funcion para hacer el cambio de moneda
public function converEurosLibra($euros){
    $valorLibra= 0.90;
    $libra=($euros*$valorLibra);
    }
}
?>