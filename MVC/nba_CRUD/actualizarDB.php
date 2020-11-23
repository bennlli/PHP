<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtrado</title>
</head>
<body>
    <?php
    # Incluimos el archivo donde tenemos todo.
    include 'dbNBA.php';
    # Hacemos la llamada al objeto para establecer la conexión.
    # Hacemos la llamada al objeto para obtener la información deseada.
    $equipo = new dbNBA();

    $nombre = $_POST['nombre'];
    $ciudad = $_POST['ciudad'];
    $conf = $_POST['conferencia'];
    $div = $_POST['division'];

    echo '<h3>Datos de actualización: </h3>';
    echo '<b>Nombre: </b>'.$nombre.'<br>';
    echo '<b>Ciudad: </b>'.$ciudad.'<br>';
    echo '<b>Conferencia: </b>'.$conf.'<br>';
    echo '<b>División: </b>'.$div.'<br>';

    $equipoFinal = $equipo->actualizar_equipo($nombre,$ciudad,$conf,$div );
    $equipoBorrar = $equipo->borrarEquipo($nombre);
    ?>
    <a href="http://localhost:8081/VSCODE_git/PHP/MVC/nba_CRUD/actualizar.php">Actualizar registro</a>
    <a href="http://localhost:8081/VSCODE_git/PHP/MVC/nba_CRUD/actualizar.php">Borrar registro</a>
    <br>
    <hr>
</body>
</html>