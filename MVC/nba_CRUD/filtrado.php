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
    $equipoFinal = $equipo->insertar_equipo($nombre,$ciudad,$conferencia,$division );
    ?>
</body>
</html>