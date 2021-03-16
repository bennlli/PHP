<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    require_once 'lib/bbdd.php';
    require_once 'lib/seguridad.php';

    
    $bbdd = new BBDD();
    $seguridad = new Seguridad();
    //limpiar variables
    $email = $seguridad->limpiar_string($_POST['email']);
    $nombre = $seguridad->limpiar_string($_POST['nombre']);
    $apellidos = $seguridad->limpiar_string($_POST['apellidos']);
    $rol = $_POST['rol'];


    if (
        isset($_POST['email']) && !is_null($_POST['email']) &&
        isset($_POST['nombre']) && !is_null($_POST['nombre']) &&
        isset($_POST['apellidos']) && !is_null($_POST['apellidos']) &&
        isset($_POST['rol']) && !is_null($_POST['rol'])
    ) {

        
        $up_user = $bbdd->actualizar_user($email, $nombre, $apellidos, $rol);

        //comprobamos que tenga datos
        if ($updatedUser != null) {
            echo "<h2>Se han actualizado los datos del usuario <br>" . $up_user->getUsuario() . " correctamente.<br>";
            echo "Pulsa en <a href='index.php'>Página Login</a> para volver al login.</h2>";
        } else {
            echo "Error al actualiar los datos" . $bbdd->get_error();
            echo "Pulsar en el <a href='miperfil.php'>MiPerfil</a> para volver a la página de mi perfil";
        }
        //borramos todo
        $seguridad->borrar_datos();
    } else {
        header('Location:index.php');
    }
    ?>
</body>
</html>