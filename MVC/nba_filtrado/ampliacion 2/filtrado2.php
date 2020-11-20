<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrado</title>
</head>
<body>
<table>
        <tr>
            <th>Equipo Local</th>
            <th>Equipo Visitante</th>
            <th>Puntos Local</th>
            <th>Puntos Visitante</th>
            <th>Temporada</th>
        </tr>
    <?php
    # Incluimos el archivo donde tenemos todo.
    include 'dbNBA2.php';
    $equipo_local = $_POST['equipo_loc'];
    $equipo_visitante = $_POST['equipo_vis'];
    $temp = $_POST['temp'];
    
    # Hacemos la llamada al objeto para establecer la conexión.
    # Hacemos la llamada al objeto para obtener la información deseada.
    $equipo = new dbNBA2();
        
    echo '<br>El equipo local que has buscado es <b>' .$equipo_local. '</b><br>';
    echo 'El equipo visitante que has buscado es <b>' .$equipo_visitante. '</b><br>';
    echo 'Temporada solicitada: <b>' .$temp. '</b><br><br>';

    $equipoResultado = $equipo->devolverEquipo($equipo_local,$equipo_visitante,$temp);
        foreach($equipoResultado as $filaEquipo){
            
            echo '<tr>';
            echo '<td>' . $filaEquipo['equipo_local'] . '<br></td>';;
            echo '<td>' . $filaEquipo['equipo_visitante'] . '<br></td>';
            echo '<td>' . $filaEquipo['puntos_local']. '<br></td>';
            echo '<td>' . $filaEquipo['puntos_visitante']. '<br></td>';
            echo '<td>' . $filaEquipo['temporada']. '<br></td>';
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>