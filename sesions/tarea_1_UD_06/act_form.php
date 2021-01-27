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
    session_start();
    //Si tiene el 'name' del form y no esta vacio hara la condicion.
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $_SESSION['usuario'] = $_POST['name'];
        echo 'El usuario actual de la sesion es '.$_SESSION['usuario'];
    } else {
        echo 'No has introducido ningun nombre.';
    }
        echo '<br><br><br>';
        echo 'Puedes ir hacia atras y mantendras la sesion, en caso de actualizar la perderas.';
    ?>
    <br>
    <a href="form.php">Pagina del formulario.
</body>

</html>