<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'actores.php'?>
    <?php 
    
    $listaActores = new Actores();
        $resultadoFinal = $listaActores->devolverActores();
        foreach ($resultadoFinal as $fila){
            echo $fila['full_desc'].'<br>';
        }


    ?>
</body>
</html>