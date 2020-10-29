<?php 
#Definimos la clase a usar.
class Jugador{
    private $numeroJug;
    private $ptos;

    #           'CONSTRUCTOR'
    # Introducimos los atributos como queramos denominarlos en el constructor.
    #   Sería la forma de ver '$numeroJug = $jugador'
    #   Sería la forma de ver '$ptos = $puntos' 
    function __construct($jugador, $puntos){
        $this -> setNumeroJug ($jugador);
        $this -> setPtos ($puntos);
    }
    #           'GETTERS'
    public function getNumeroJug(){
        return $this->numeroJug;
    }

    public function getPtos(){
        return $this->ptos;
    }

    #           'SETTERS'
    # Pasamos por parametros el 'nombre' asignado a esa propiedad
    public function setNumeroJug($jugador){
        $this->numeroJug = $jugador;
        return $this;
    }
    public function setPtos($puntos){
        # Comparamos '$puntos' con '0' para asi siempre coger los valores superiores a '0'
        if($puntos > 0)
        $this->ptos = $puntos;
        
    }

    # Método donde añadiremos puntos siempre que sean mayor a '0'
    function addPtos(){
        for ($puntos=1; $puntos < 10; $puntos++) { 
            $punto = rand(20,100);
            echo 'El numero de puntos es ' .$punto. '<br>';   
        }
       
        
    }
}
?>