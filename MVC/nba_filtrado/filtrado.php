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
    $con = new dbNBA();
    # Hacemos la llamada al objeto para obtener la información deseada.
    $equipo = new Equipo();
        $equipoForm = $_POST['equipo'];
    echo $equipoForm;
    $equipoFinal = $equipo->devolverEquipo($equipoForm);
        foreach($equipoFinal as $filaEquipo){
            echo $filaEquipo;
        }
    ?>
</body>
</html>