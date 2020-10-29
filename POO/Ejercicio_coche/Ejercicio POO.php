<?php 
                //************ POO ************
    //Definición de la 'CLASE'
    class Coche {
        private $combustible;
        private $cantidad_combustible;
        private $velocidad;
        private $combustible_max;
        private $combustible_reserva;
        

        //Método constructor
        function Coche(){
            //referencia la clase
            $this -> combustible;
            $this -> cantidad_combustible;
            $this -> velocidad;
            $this -> combustible_max;
            $this -> combustible_reserva;
        
            
        }

        //Métodos
        //Método para ver el movimiento del vehículo
        function moviendose(){
            $estado_inicial = 0;
            $parado = 0;
            $moviendo = 1;
            if($estado_inicial == $parado){
                echo 'El vehículo esta detenido. <br><hr>';
            }else{
                echo 'Comenzamos a andar. <br><hr>';
            }
        }

        //Método para ver el estado del vehiculo
        function estado_Coche(){
            $parado = 0;
                echo 'El coche esta detenido y arrancado. <br><hr>';

        }

        //Método para saber el combustible del vehiculo
        function estado_combustible($cantidad_combustible,$combustible_max,$combustible_reserva){
            if($cantidad_combustible == $combustible_max){
                echo 'El vehículo esta FULL.<br><hr>';
            }elseif($cantidad_combustible <$combustible_max && $cantidad_combustible>$combustible_reserva){
                echo 'Aun tiene gasolina, pero no te descuides!!.<br><hr>';
            }else{
                echo 'El vehículo esta en reserva.<br><hr>';
            }

        }
        function acelerar(){


        }
        function frenar(){


        }
        function repostar(){


        }
    }
    //Estancia perteneciente al coche
    $reanult = new Coche();
        $reanult -> moviendose();
        $reanult -> estado_Coche();
        $reanult -> estado_combustible(1,4,0);

        echo '<br>';
?>