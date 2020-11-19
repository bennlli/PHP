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
            <th>Ciudad</th>
            <th>Conferencia</th>
            <th>División</th>
        </tr>
    <?php
    # Incluimos el archivo donde tenemos todo.
    include 'dbNBA.php';
    # Hacemos la llamada al objeto para establecer la conexión.
    # Hacemos la llamada al objeto para obtener la información deseada.
    $equipo = new dbNBA();
        $equipoForm = $_POST['equipo'];
    echo 'El equipo que has buscado es <b>' .$equipoForm. '<b><br><br>';
    $equipoFinal = $equipo->devolverEquipo($equipoForm);
        foreach($equipoFinal as $filaEquipo){
            echo '<tr>';
            echo '<td>' . $filaEquipo['Ciudad'] . '<br></td>';;
            echo '<td>' . $filaEquipo['Conferencia'] . '<br></td>';
            echo '<td>' . $filaEquipo['Division']. '<br></td>';
            echo '</tr>';
        }
    ?>
    </table>
</body>
</html>