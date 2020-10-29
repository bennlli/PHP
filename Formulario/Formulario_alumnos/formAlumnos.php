<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
            # Almacenamos los datos del formulario en variables.
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $curso = $_POST["curso"];
            $ciclo = $_POST["ciclo"];
            # Imprimimos los resultados deseados.
            echo $nombre." ".$apellido." | ".$curso." . ".$ciclo;
        ?>
    </h1>
    
    <?php  
        # Almacenamos los datos del formulario en variables.
        $nota1 = $_POST["cal1"];
        $nota2 = $_POST["cal2"];
        $nota3 = $_POST["cal3"];
        $nota4 = $_POST["cal4"];


        # Almacenamos los datos introducidos por el formulario para poder manipularlos.
        $notas = array($nota1,$nota2,$nota3,$nota4);

        # Sumamos con 'array_sum'
        $suma = 0;
        $suma = array_sum($notas);
        
        # Contamos los numeros introducidos en el 'array'
        $totalNum = count($notas);

        # Hacemos la media de los datos
        $media = $suma/$totalNum;

        # Nota mas alta 
        $alta = 0;
        $alta = max($notas);
    
        # Nota mas baja 
        $baja = 0;
        $baja = min($notas);

        echo 'La media pondera de las notas es '. $media. '<br>';
        echo 'La nota más alta es '. $alta .'<br>';
        echo 'La nota más baja es '. $baja .'<br>';
    ?>
        

</body>
</html>