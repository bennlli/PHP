<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipo Basket</title>
</head>
<body>
    <?php
    # Conexión.
    $mysqli = new mysqli('localhost','root','','liganba',3306);
    if($mysqli -> connect_errno){
        # ERROR.
        echo 'Fallo al conectar con la base de datos :('.$mysqli->connect_errno.')'.$mysqli->connect_error;
    }else{
        # CORRECTA.
        echo '<h3>Conexión establecidad satisfactoriamente</h3><br><hr>';
    }
    ?>
    <h1>Resultados obtenidos de los ala-pivots</h1>
    <?php 
    # Consulta de la base de datos.
    $consulta = $mysqli->query('SELECT `Nombre`, `Posicion`, `Nombre_equipo` FROM `jugadores` WHERE Posicion="C-F"');
    # '$resultado->num_rows' Lo usamos para obtener el número de elementos.
    echo 'El número de resultados de la base de datos es '.$consulta->num_rows.' elementos<br><br>';
        # 'for' Para recorrer las posiciones que tiene.
        for ($i=0; $i <$consulta->num_rows ; $i++) { 
            # Usamos el 'fetch_assoc()' para extraer cada dato de cada posición como en un 'array'.
            $fila = $consulta->fetch_assoc();
            echo 'El jugador <b>'.$fila['Nombre'].'</b> de "<b>'.$fila['Nombre_equipo'].'</b>", es ala-pivot <b>"'.$fila['Posicion'].'"</b><br>';
        }
    ?>
</body>
</html>