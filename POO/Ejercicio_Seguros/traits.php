<?php
# Uso de 'TRAIT', compartimos funciones y reutilizamos código si necesidad de heredar
trait datosIVA{
    function datosCliente($dni,$nombre_apellidos){
        echo 'Nº DNI - '.$dni.'<br>';
        echo 'Nombre y apellidos del cliente: '.$nombre_apellidos.'<br>';
    }
    function calculaIVA(){
        $IVA = $this->IVA;
        $precio = $this->cantidad;
        $totalIVA = ($precio*$IVA)+$precio;
        echo 'El precio del producto con IVA es '.$totalIVA.'€<br>';
    }
    function datosFactura($numFactura){
        echo 'Nº factura '.$numFactura.'<br>';
    }
}
?>