<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Formulario</title>
</head>
<body>
    <!--
        Queremos mostrar en todo momento el último nombre introducido a través de formulario. Para ello generaremos dos páginas php:
        • La primera tendrá un formulario que nos pida nuestro nombre.
        • La segunda  recogerá  el  nombre  introducido  y  lo  almacenará  en  la variable de sesión. En  todo  momento,  tanto  en
          el  formulario  como  en  la  segunda  página  se mostrará el último nombre introducido.
    -->
    <?php

    $name = $_POST["name"];
    echo "El nombre introducido es".$name;

            session_start();

    ?>
</body>
</html>