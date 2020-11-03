<?php

# Definicione de la clase
class conversion{
    private $euros = 0;
    private $libras = 0; 

    #           'GETTERS'
public function getEuros(){
    return $this->euros;
    }
public function getLibras(){
    return $this->libras;
    }
#           'SETTERS'
public function setEuros($euros){
    $this->euros = $euros;
    }
public function setLibras($libras){
    $this->libras = $libras;
    }
# Funcion para hacer el cambio de moneda EUR - GBP
public function converEurosLibra(){
    $valorLibra= 0.90;
    $libra=($this -> euros*$valorLibra);
    return $libra;
    }
# Funcion para hacer el cambio de moneda GBP - EUR
public function converLibrasEuros(){
    $valorEuro= 1.11;
    $euro=($this -> libras *$valorEuro );
    return $euro;
    }    
}
?>