<?php

#Definimos la clase a usar.
class dado{
    private $minNumDado = 0;
    private $maxNumDado = 12;

    #           'CONSTRUCTOR'
    # Introducimos los atributos como queramos denominarlos en el constructor.
    #   Sería la forma de ver '$minNumDado = $min'
    #   Sería la forma de ver '$maxNumDado = $max' 
    function __construct($min, $max){
        $this -> SetMinNumDado ($min);
        $this -> SetMaxNumDado ($max);
    }
    #           'GETTERS'
    public function getMinNumDado(){
        return $this->minNumDado;
    }
    
    public function getMaxNumDado(){
        return $this->maxNumDado;
    }

    # En este caso modificamos ambos 'SETTERS' para agregarle unos valores ya predeterminados
    #           'SETTERS'
    # Pasamos por parametros el 'nombre' asignado a esa propiedad
    public function setMinNumDado($min){
        # Comparamos '$min' con '0' para ver que sea positivo
        # También '$min' con '$this -> maxNumDado' o 'el valor que asignemos 12' para ver que sea menor que el máximo
        if(($min >= 1) && ($min < 12))
        $this->minNumDado = $min;
        
    }
    
    public function setMaxNumDado($max){
        # Comparamos '$max' con '12' para ver que no pase del valor '12'
        # También '$max' con '$this -> minNumDado' o 'el valor que asignemos 0' para ver que sea mayor
        if(($max <= 12) && ($max > 1))
        $this->maxNumDado = $max;
        
    }
    # Método donde veremos la tirada de los dados entre 0 y 12!
    function tiramosDados(){
         return rand($this -> minNumDado,$this -> maxNumDado);
     }

}

?>