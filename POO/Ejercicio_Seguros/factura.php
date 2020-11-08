<?php

require_once 'traits.php';
# Clase
class Factura{
# Atributos    
private $nombreApellidos;
private $cantidad;
private $IVA;
private $factura;

    # Constructor
    function __construct(){
        $this->nombreApellidos = 'Maria Alonso';
        $this->cantidad = 0;
        $this->IVA = 0.21;
        $this->factura=0;

    }


    # Métodos     
    function totalSinIVA($precio_producto){
        if($precio_producto=='poliza A'){
            $this->cantidad=600;
            echo 'Ha escogido el producto de poliza A, cantidad '.$this->cantidad.'€ sin IVA<br>';
        }elseif ($precio_producto=='poliza B') {
            $this->cantidad=300;
            echo 'Ha escogido el producto de poliza B, cantidad '.$this->cantidad.'€ sin IVA<br>';
        }else {
            $this->cantidad=250;
            echo 'Ha escogido el producto de poliza C, cantidad '.$this->cantidad.'€ sin IVA<br>';
        }
    }
    #                       SETTERS
    public function setNombreApellido($nombre_apellidos){
        $this->nombreApellidos = $nombre_apellidos;
        return $nombre_apellidos;
    }
    public function setCantidad($cantidad){
        $this->cantidad = $cantidad;
        return $this;
    }
    public function setFactura($factura){
        $this->factura = $factura;
        return $this;
    }

    #                       GETTERS
    public function getNombreApellido(){
        return $this->nombreApellidos;
    }
    public function getCantidad(){
        return $this->cantidad;
    }
    public function getIVA(){
        return $this->IVA;
    }
    public function getFactura(){
        return $this->factura;
    }
    # Para usar el 'TRAIT' del otro archivo
    use datosIVA;
}
?>