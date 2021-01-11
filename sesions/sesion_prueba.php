<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
        $_SESSION['usuario'] = "Benlli";
        print_r($_SESSION);
    } else {
        $_SESSION['count']++;
        print_r($_SESSION);
    }
    ?>
    <br>
    <a href="borrarCuenta.php">Borrar la cuenta</a>
    <br>
    <a href="sesion_prueba_destruir.php">Destruir sesion</a>
</body>

</html>