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
    require_once "lib/bbdd.php";
    require_once "lib/seguridad.php";
    require_once "lib/usuario.php";

    //creamos del objeto de la base de datos para poder hacer la consulta
    $bbdd = new BBDD();
    $seguridad = new Seguridad();

    //limpieza de seguridad para lo introducido en el formulario
    $email = $seguridad->limpiar_string($_POST['email']);
    $pass1 = $seguridad->limpiar_string($_POST['pass0']);
    $pass2 = $seguridad->limpiar_string($_POST['pass1']);
    $nombre = $seguridad->limpiar_string($_POST['nombre']);
    $apellidos = $seguridad->limpiar_string($_POST['apellidos']);

    //comprobación de los datos insertados por el usuario
    if (
        isset($_POST['email']) && !is_null($_POST['email']) &&
        isset($_POST['pass0']) && !is_null($_POST['pass0']) &&
        isset($_POST['pass1']) && !is_null($_POST['pass1']) &&
        isset($_POST['nombre']) && !is_null($_POST['nombre']) &&
        isset($_POST['apellidos']) && !is_null($_POST['apellidos'])
    ) {

        //comprobar que las dos contraseñas sean idénticas
        if ($_POST['pass0'] == $_POST['pass1']) {

            //comprobar si existe el usuario, si da TRUE o lo encuentra
            if ($bbdd->buscar_usuario($email, null)) {
                $seguridad->set_error("Error, ya existe el usuario");
                header("Location:registro.php");
            } else {

                //se inserta un nuevo usuario
                $nuevo_user = $bbdd->insertar_user($nombre, $apellidos, $email, $rol, $pass1);


                //mensaje de registro 
                if ($nuevo_user != null) {
                    echo "<h1>Usuario Registrado.</h1>";
                    echo "<a href='index.php'>Pulsar para volver al LOGIN</a>";
                }
            }
        } else {
            $seguridad->set_error("La contraseña no coincide");
            header('Location:registro.php');
        }
    }
    ?>
</body>
</html>