<?php

# Definicione de la clase
class conversion{
    private $euros = 0;
    private $libras = 0; 
    private $dollares =0;

    #           'GETTERS'
public function getEuros(){
    return $this->euros;
    }
public function getLibras(){
    return $this->libras;
    }
public function getDollares(){
    return $this->dollares;
    }
#           'SETTERS'
public function setEuros($euros){
    $this->euros = $euros;
    }
public function setLibras($libras){
    $this->libras = $libras;
    }
public function setDollares($dollares){
        $this->dollares = $dollares;
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
# Funcion para hacer el cambio de moneda EUR - US
public function converEurosUs(){
    $valorDollar= 1.17;
    $dollares=($this -> dollares *$valorDollar );
    return $dollares;
    }
# Funcion para hacer el cambio de moneda EUR - US
public function converUsEuro(){
    $valorEUR= 0.85;
    $euros=($this -> dollares *$valorEUR );
    return $euros;
    }    
}
?>