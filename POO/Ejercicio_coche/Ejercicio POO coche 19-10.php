<?php 
                #************ POO ************
    #Definición de la 'CLASE'
    class Coche {
        private $combustible;
        private $cantidad_combustible;
        private $velocidad;
        private $combustible_max;
        private $combustible_reserva;
        

        #Método constructor
        function __construct($combustible, $cantidad_combustible, $velocidad, $combustible_max, $combustible_reserva){
            //referencia la clase
            $this -> combustible = $combustible;
            $this -> cantidad_combustible = $cantidad_combustible;;
            $this -> velocidad = $velocidad;
            $this -> combustible_max = $combustible_max;
            $this -> combustible_reserva = $combustible_reserva;
            
        }
            #GETTERS
        function getCombustible(){
            return $this -> combustible;
        }
        function getCantidad_combustible(){
            return $this -> cantidad_combustible;
        }
        function getVelocidad(){
            return $this -> velocidad;
        }
        function getCombustible_max(){
            return $this -> combustible_max;
        }
        function getCombustible_reserva(){
            return $this -> combustible_reserva;
        }

        #Métodos
        #Método para ver el movimiento del vehículo
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

        #Método para ver el estado del vehiculo
        function  set_Estado_Coche($combustible){
                echo 'Combustible que usa este vehículo es ' . $combustible .'.<br>';         
                echo 'El coche esta detenido y arrancado. <br><hr>';
        }

        #Método para saber el combustible del vehiculo
        function set_estado_combustible($cantidad_combustible,$combustible_max,$combustible_reserva){
            if($cantidad_combustible == $combustible_max){
                echo 'El vehículo esta FULL.<br><hr>';
            }elseif($cantidad_combustible <$combustible_max && $cantidad_combustible>$combustible_reserva){
                echo 'Aun tiene gasolina, pero no te descuides!!<br><hr>';
            }else{
                echo 'El vehículo esta en reserva.<br><hr>';
            }

        }
        #Método para saber si el vehiculo esta acelerando
        function set_acelerar($velocidad){
            if($velocidad == 1){
                echo 'El vehículo se encuentra punto muerto con el motor arrancado.<br><hr>';
            }elseif($velocidad > 5){
                echo 'El vehículo se encuentra en movimiento y acelerando.<br><hr>';
            }else{
                echo 'El vehículo se encuentra movimiento.<br><hr>';
            }
        }
        #Método para saber si tiene que respostar
        #combustible max 5, reserva es 1 y el estado actual es 4
        function set_repostar($cantidad_combustible,$combustible_max,$combustible_reserva){
            if($cantidad_combustible == $combustible_max){
                echo 'La cantidad que muestra el panel es de '.$cantidad_combustible.'/5<br>';
                echo 'No necesitas repostar, el vehículo tiene el tanque lleno.<br><hr>';
            }elseif($cantidad_combustible >=2){
                echo 'La cantidad que muestra el panel es de '.$cantidad_combustible.'/5<br>';
                echo 'Aun tiene gasolina, más de la mitad!!<br><hr>';
    
            }else{
                echo 'La cantidad que muestra el panel es de '.$cantidad_combustible.'/5<br>';
                echo 'El vehículo esta en reserva, vamos a echarle gasolina.<br>';
                echo 'Repostando.<br>. . .<br>. . . <br>';
                for ($i=$cantidad_combustible; $i < 5 ; $i++) { 
                    $cantidad_combustible++;

                }
                echo 'La cantidad de combustible ahora mismo es de ' . $cantidad_combustible . '/5.<br><hr>';
            }
         }
         #Método donde veremos al vehículo frenar
         function set_frenar($velocidad){
            //velocidad es 15
            echo 'La velocidad actual del vehículo es de '.$velocidad.'km/h.. <br>';
            echo 'El vehículo a comenzado a frenar <br>';
                for ($i=$velocidad; $i >0 ; $i--) { 
                    $velocidad--;
                    echo 'El vehículo esta reduciendo, su velocidad actual es de '.$velocidad . 'km/h.<br>';
                }
                echo 'El vehículo se ha detenido. <br><hr>';
        }
        #Estilo al 'to string'
        function info(){
            echo 'Tipo de combustible: ' . $this -> combustible.'. <br>';
            echo 'La cantidad actual de combustible es: ' . $this -> cantidad_combustible.'. <br>';
            echo 'La velocidad del vehículo es: '. $this -> velocidad.'. <br>';
            echo 'El combustible máximo es de ' . $this -> combustible_max.'. <br>';
            echo 'El combustible de la reserva es de '. $this -> combustible_reserva.'. <br>';
        }
    }
                #Estancia perteneciente al coche con los datos deseados
                $seat = new Coche('diesel',0,10,5,1);

                $seat -> moviendose();
                #Poner los 'GET' para extraer los resultados 
                $seat -> set_Estado_Coche ($seat ->getCombustible());
                #Poner los 'GET' para extraer los resultados
                $seat -> set_estado_combustible($seat -> getCantidad_combustible(), $seat -> getCombustible_max(), $seat -> getCombustible_reserva());
                
                $seat -> set_acelerar($seat -> getVelocidad());

                $seat -> set_repostar($seat -> getCantidad_combustible(), $seat -> getCombustible_max(), $seat -> getCombustible_reserva());

                $seat -> set_frenar($seat -> getVelocidad());

                $seat -> info();
?>