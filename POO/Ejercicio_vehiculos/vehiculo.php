<?php
    class Vehiculo{
        private $color;
        private $peso;

    function __construct(){
        $this->color;
        $this->peso;
    }


    public function circular(){
        echo 'El vehiculo esta circulando. <br>';
    }
    public function añadir_persona($peso_persona,$peso){
        $peso_persona_total= $peso_persona + $peso;
        echo 'El peso del vehiculo con la persona es de '.$peso_persona_total.'kg<br>';
    }

#                   SETTERS
    public function setColor($color){
        $this->color = $color;
        return $this;
    }
    public function setPeso($peso){
        $this->peso = $peso;
        return $this;
    }
#                   GETTERS
    public function getColor(){
            return $this->color;
    }
    public function getPeso(){
        return $this->peso;
    }


        
    }
?>