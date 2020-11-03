<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Países</title>
</head>
<body>
    <?php 
    # Conexión.
    $mysqli = new mysqli('localhost','root','','paises',3306);
    if ($mysqli ->connect_errno) {
        # ERROR.
        echo 'Fallo al conectar a MySQL: ('.$mysqli->connect_errno.')'.$mysqli->connect_error;
    }else{
        # CORRECTA.
        echo '<h3>Conexión establecida correctamente</h3><br><hr>';
    }
    ?>
    <h1>Países obtenidos en phpMyAdmin</h1><br>
    <table>
        <tr style="background: #CCC">
            <th>ID</th>
            <th>Nombre</th>
            <th>continente</th>
        </tr>
    
    <?php
    # Consulta de la base de datos.
    $resultado = $mysqli->query('Select * from pais');
    # '$resultado->num_rows' Lo usamos para obtener el número de elementos.
    echo 'Los resultados obtenidos son '.$resultado->num_rows.' elementos.<br><br>';
        # 'for' Para recorrer las posiciones que tiene
        for ($i = 0; $i < $resultado->num_rows; $i++) { 
            # Usamos el 'fetch_assoc()' para extraer cada dato de cada posición como en un 'array'
            $fila = $resultado->fetch_assoc();
            echo '<tr><td style="background: #CCC">'.$fila['id'].'</td>';
            echo '<td>'.$fila['nombre'].'</td>';
            echo '<td>'.$fila['continente'].'</td></tr>';
        }
    ?>
    </table>


    
</body>
</html>