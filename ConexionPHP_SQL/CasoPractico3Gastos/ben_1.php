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
    <?php 
    # Consulta de la base de datos.
    # Total de gastos x semana
    $consulta1 = $mysqli->query("SELECT SUM(gastos) AS TotalSemana1 FROM `gastos` WHERE num_semana='1'");
        $consultaTotal1 = $consulta1->fetch_assoc();
        
    # Consulta de la base de datos.
    # Total de ventas x semana
    $consulta2 = $mysqli->query("SELECT SUM(venta) AS TotalSemana1 FROM `ventas` WHERE num_semana='1'");
        $consultaTotal2 = $consulta2->fetch_assoc();
        $beneficios = $consultaTotal2['TotalSemana1'] - $consultaTotal1['TotalSemana1'];
        echo '<h3>El total de beneficios de la semana 1:</h3><br>';
        echo round($beneficios,2).'€<br>';
    ?>
