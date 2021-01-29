<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Formulario</title>
</head>

<body>
    <!--
        Escribid un formulario que solicite nombres y los almacene en una sesión hasta que el usuario cierre la sesión.
        El formulario contiene un campo para escribir un nombre una o varias palabras.
        El formulario muestra los nombres que se han escrito anteriormente.
        La página contiene un enlace para cerrar la sesión.
    -->
    <?php
    session_start();
    $nombres = [];
    //Si tiene el 'name' del form y no esta vacio hara la condicion.
    if (isset($_POST['name1']) && !empty($_POST['name1'])) {
        $_SESSION['usuario'] = $_POST['name1'];
        $name1 = $_SESSION['usuario'];
        $nombres = array($name1);
    } else {
        echo 'No has introducido ningun nombre.<br>';
    }

    if (isset($_POST['name2']) && !empty($_POST['name2'])) {
        $_SESSION['usuario2'] = $_POST['name2'];
        $name2 = $_SESSION['usuario2'];
        $nombres = array($name2);
    } else {
        echo 'No has introducido ningun nombre.<br>';
    }

    
    if (isset($nombres) && !empty($nombres)) {
        $nombres = array($name1, $name2);
        echo "Usuarios que se han registrado en la pagina son: " . $nombres[0] ." y ". $nombres[1] . "<br>";
        echo 'El usuario actual de la sesion es ' . $_SESSION['usuario2'];
    } else {
        echo 'Nadie fue registrado en las listas.<br>';
    }
    
    
    

    echo '<br><br><br>';
    ?>
    <br>
    <a href="form.php" <?php session_destroy()?>>Pagina del formulario, al volver resetearas la sesion
</body>

</html>