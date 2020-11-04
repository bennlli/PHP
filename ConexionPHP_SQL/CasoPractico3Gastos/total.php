<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    # Conexión.
    $mysqli = new mysqli('localhost','root','','beneficios',3306);
    if($mysqli -> connect_errno){
        # ERROR.
        echo 'Fallo al conectar con la base de datos :('.$mysqli->connect_errno.')'.$mysqli->connect_error;
    }else{
        # CORRECTA.
        echo '<h3>Conexión establecidad satisfactoriamente.</h3><br><hr>';
    }
    ?>
    <h2>Gastos por semana</h2>
    <?php 
    # Consulta de la base de datos.
    # Total de gastos x semana
    $consulta1 = $mysqli->query("SELECT SUM(gastos) AS TotalSemana1 FROM `gastos` WHERE num_semana='1'");
        $consultaTotal1 = $consulta1->fetch_assoc();
        # $consultaTotal1['TotalSemana1'] = TotalSemana es el 'AS' en la base de datos
        echo 'El total de gastos de la semana 1 es '.round($consultaTotal1['TotalSemana1'],2).'€<br>';
    $consulta2 = $mysqli->query("SELECT SUM(gastos) AS TotalSemana2 FROM `gastos` WHERE num_semana='2'");
        $consultaTotal2 = $consulta2->fetch_assoc();
        # $consultaTotal2['TotalSemana2'] = TotalSemana es el 'AS' en la base de datos
        echo 'El total de gastos de la semana 2 es '.round($consultaTotal2['TotalSemana2'],2).'€<br><br>';
    ?><hr>
    <h2>Ventas por semana</h2>
    <?php 
    # Consulta de la base de datos.
    # Total de ventas x semana
    $consulta2 = $mysqli->query("SELECT SUM(venta) AS TotalSemana1 FROM `ventas` WHERE num_semana='1'");
        $consultaTotal2 = $consulta2->fetch_assoc();
        # $consultaTotal3['TotalSemana3'] = TotalSemana es el 'AS' en la base de datos
        echo 'El total de ventas de la semana 1 es '.round($consultaTotal2['TotalSemana1'],2).'€<br>';
    $consulta3 = $mysqli->query("SELECT SUM(venta) AS TotalSemana2 FROM `ventas` WHERE num_semana='2'");
        $consultaTotal3 = $consulta3->fetch_assoc();
        # $consultaTotal4['TotalSemana4'] = TotalSemana es el 'AS' en la base de datos
        echo 'El total de ventas de la semana 2 es '.round($consultaTotal3['TotalSemana2'],2).'€<br><br>';
    ?>
    <hr>
    
</body>
</html>
