<?php

require_once 'lib/seguridad.php';
$seguridad = new Seguridad();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro </title>
</head>

<body>
<h1>Registro</h1>
    <?php
    if ($_SESSION['tipo_error'] != null) {
        echo 'class=\"error\">Error ' . $_SESSION['tipo_error'];
    }
    ?>
    <form action="registro_usuario.php" method="POST">
                                        <!-- EMAIL -->
        <label for="email">Email: </label><br>
        <?php
        if ($_SESSION['usuario'] != null) {
            echo "<input type=\"email\" id=\"email\" name=\"email\" value='" . $_SESSION['usuario'] . "' required ><br><br>";
        } else {
            echo "<input type=\"email\" id=\"email\" name=\"email\" required></br></br>";
        }
        ?>
                                        <!-- PASSWORD -->
        <label for="contraseña">Password: </label><br>
        <input type="password" name="pass0" id="pass0" required><br><br>

        <label for="contraseña">Repetir Password: </label><br>
        <input type="password" name="pass1" id="pass1" required><br><br>
                                        <!-- NOMBRE -->
        <label for="nombre">Nombre</label><br>
        <?php

        if ($_SESSION['nombre'] != null) {
            echo "<input type='text' id='nombre' name='nombre' value='" . $_SESSION['nombre'] . "' required><br><br>";
        } else {
            echo "<input type=\"text\" id=\"nombre\" name=\"nombre\" required><br><br>";
        }
        ?>
                                        <!-- APELLIDOS -->
        <label for="apellidos">Apellidos</label><br>
        <?php
        if ($_SESSION['apellidos'] != null) {
            echo "<input type='text' id='apellidos' name='apellidos' value='" . $_SESSION['apellidos'] . "' required><br><br>";
        } else {
            echo "<input type=\"text\" id=\"apellidos\" name=\"apellidos\" required><br><br>";
        }
        ?>

        <input type="hidden" name="accion" value="registro">

        <input type="submit" value="Registrar"><br><br>
    </form>
</body>

</html>