<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require 'factura.php';
    require 'indemnizacion.php';
    
    echo '<h3>DATOS FACTURA CLIENTE</h3>';
    $cliente = new Factura();
    $cliente ->datosFactura('125');
    $cliente -> datosCliente('7535054-V','Maria Alonso Fernandez');
    $cliente ->totalSinIVA('poliza A');
    $cliente ->calculaIVA();
    
    echo '<hr>';
    echo '<h3>DATOS FACTURA CLIENTE</h3>';
    $cliente1 = new Factura();
    $cliente1->datosFactura('145');
    $cliente1 -> datosCliente('0542559-F','Pedro Rodriguez Vazquez');
    $cliente1 ->totalSinIVA('poliza B');
    $cliente1 ->calculaIVA();
    
    echo '<hr>';
    echo '<h3>DATOS INDEMNIZACION CLIENTE</h3>';
    $cliente = new Indemnizacion();
    $cliente->datosFactura('200');
    $cliente -> datosCliente('14255856-F','Juan Ramirez Vazquez');
    $cliente ->totalSinIVA('Humedades');
    $cliente ->calculaIVA();
    
    echo '<hr>';
    ?>
</body>
</html> 