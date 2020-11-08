<?php

require_once 'traits.php';
# Clase
class Indemnizacion{
# Atributos    
private $nombreApellidos;
private $cantidad;
private $IVA;
private $ImporteFactura;

    # Constructor
    function __construct(){
        $this->nombreApellidos = 'Maria Alonso';
        $this->cantidad = 0;
        $this->IVA = 0.21;
        $this->ImporteFactura=0;

    }


    # Métodos     
    function totalSinIVA($precio_factura){
        if($precio_factura=='Humedades'){
            $this->cantidad=500;
            echo 'Indemnizacion por humedad, cantidad '.$this->cantidad.'€ sin IVA<br>';
        }elseif ($precio_factura=='poliza B') {
            $this->cantidad=150;
            echo 'Indemnizacion por rotura de cristales '.$this->cantidad.'€ sin IVA<br>';
        }else {
            $this->cantidad=750;
            echo 'Indemnizacion por robo, cantidad '.$this->cantidad.'€ sin IVA<br>';
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
    public function setImporteFactura($ImporteFactura){
        $this->ImporteFactura = $ImporteFactura;
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
    public function getImporteFactura(){
        return $this->ImporteFactura;
    }
    # Para usar el 'TRAIT' del otro archivo
    use datosIVA;
}
?>