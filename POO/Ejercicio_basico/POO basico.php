<?php 
                //************ POO ************
    //Definición de la 'CLASE'
    class Coche {

        var $ruedas;
        var $color;
        var $motor;

        //Método constructor
        function Coche(){
            //referencia la clase
            $this -> ruedas = 4;
            $this -> color = " ";
            $this -> motor = 1600;
        }

        //Métodos
        function arrancar(){
            echo 'Estoy arrancando <br>';

        }
        function girar(){
            echo 'Estoy girando <br>';

        }
        function frenar(){
            echo 'Estoy frenando <br>';

        }
        function establecer_color($color){
            $this -> color = $color;
            echo "El color de este coche es ".$this->color."<br>";

        }
    }
    //Estancia perteneciente al coche
    $reanult = new Coche();
        $reanult -> arrancar();
        $reanult -> establecer_color('rojo');
    $mazda = new Coche();;
    $seat = new Coche();

?>