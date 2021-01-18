<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--
        Ejercicio
        Una vez que hemos vista el inicio de creación de las cookies:
        1. Crearemos dentro de una estructura de directorios dentro de nuestro servidor un nuevo fichero de nominado numVisitas.php
        2. Iniciamos la cookie numVisitas con el valor 0.
        3. Añadimos 1 siempre y cuando la cookie exista.
    -->
    <p>Uso de cookies.</p>
    <?php
    /*
        --- Setting new cookie ---
        Name = nombre cookie
        value = valor cookie
        $int = tiempo de expiración
        */
    if (!isset($_COOKIE["numVisitas"])) {
        setcookie("numVisita", 0);
        echo "cookie creada";
    } else {
        $valor = $_COOKIE["numVisitas"] + 1;
        setcookie("numVisitas", $valor);
    }
    if (isset($_COOKIE["numVisitas"]))
        echo "Num Visitas=" . $_COOKIE["numVisitas"];
    ?>
</body>

</html>