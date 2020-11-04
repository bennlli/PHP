<?php
    # Conexión.
    $mysqli = new mysqli('localhost','root','','beneficios',3306);
    if($mysqli -> connect_errno){
        # ERROR.
        echo 'Fallo al conectar con la base de datos :('.$mysqli->connect_errno.')'.$mysqli->connect_error;
    }else{
        # CORRECTA.
        echo '<h3>Conexión establecidad satisfactoriamente desde total.php</h3><br><hr>';
    }
    ?>
    <?php 
    # Consulta de la base de datos.
    # Total de ventas y total de gastos x semana
    $consulta = $mysqli->query("SELECT SUM(gastos) FROM `gastos` WHERE num_semana='1'");
    $consultaTotal = $consulta->fetch_assoc();
    echo 'El resultado es'.$consultaTotal.'<br><br>';
        
    ?><hr><hr>