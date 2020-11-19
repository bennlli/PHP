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
    include 'dbNBA1.php';
    # Hacemos la llamada al objeto para establecer la conexión.
    # Hacemos la llamada al objeto para obtener la información deseada.
    $equipo = new dbNBA();
        $equipo_loc = $_POST['equipo_loc'];
        $equipo_vis = $_POST['equipo_vis'];
        $temporada = $_POST['temporada'];

    echo '<br>El equipo local que has buscado es <b>' .$equipo_loc. '</b><br>';
    echo 'El equipo visitante que has buscado es <b>' .$equipo_vis. '</b><br>';
    echo 'Temporada solicitada: <b>' .$temporada. '</b><br><br>';

    $equipoResultado = $equipo->devolverEquipo($equipo_loc,$equipo_vis,$temporada);
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