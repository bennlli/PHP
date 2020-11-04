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
    $consulta1 = $mysqli->query("SELECT SUM(gastos) AS TotalSemana2 FROM `gastos` WHERE num_semana='2'");
        $consultaTotal1 = $consulta1->fetch_assoc();
        
    # Consulta de la base de datos.
    # Total de ventas x semana
    $consulta2 = $mysqli->query("SELECT SUM(venta) AS TotalSemana2 FROM `ventas` WHERE num_semana='2'");
        $consultaTotal2 = $consulta2->fetch_assoc();
        $beneficios = $consultaTotal2['TotalSemana2'] - $consultaTotal1['TotalSemana2'];
        echo '<h3>El total de beneficios de la semana 2 es </h3><br>';
        echo round($beneficios,2).'€<br>';
    ?>