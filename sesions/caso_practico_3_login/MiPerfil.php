<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil </title>
</head>

<body>
    <div>
        <h3>MI PERFIL</h3>
        <?php
        require_once 'lib/bbdd.php';
        require_once 'lib/seguridad.php';

        //objetos necesarios para la consulta y la seguridad/sesión
        $bbdd = new BBDD();
        $seguridad = new Seguridad();
        $rol = $bbdd->recoger_roles();

        //limpieza de seguridad para lo introducido en el formulario
        $user = $seguridad->limpiar_string($_POST['usuario']);
        $pass = $seguridad->limpiar_string($_POST['pass']);

        //inicio del formulario
        echo "<form action='actualizar_perfil.php' method='post'>";

        //comprobación rutinaria de campos de formularios
        if (
            isset($_POST['usuario']) && !is_null($_POST['usuario']) &&
            isset($_POST['pass']) && !is_null($_POST['pass'])
        ) {

            //buscar el usuario mediante el objeto de la base de datos ya que es un método de la misma
            $existe_user = $bbdd->buscar_usuario($_POST['usuario'], $pass);

            //da la bienvenida si no es false
            if ($existe_user != null) {


                //para comprobar la contraseña
                if (password_verify($pass, $existe_user->getPass())) {
                    echo "Bienvenido usuario " . $existe_user();
                    //añade la variable user a la sesión en $_SESSION['nombre'];
                    $seguridad->add_user($usuario);

                    //muestra lo datos antiguos
                    echo "<label for='email'>e-mail</label>";
                    echo "<input type='text' name='email' value='" . $existUser->getEmail() . "' readonly>";
                    echo "<label for='nombre'>Nombre</label>";
                    echo "<input type='text' name='nombre' value='" . $existUser->getNombre() . "' required>";
                    echo "<label for='apellidos'>Apellidos</label>";
                    echo "<input type='text' name='apellidos' value='" . $existUser->getApellidos() . "' required>";
                    echo "<label for=\"rol\">ROL</label><br>";
                    echo "<select name=\"rol\">";
                    if ($rol != null) {
                        foreach ($rol as $user_rol) {
                            echo "<option value=" . $user_rol['tipo'] . ">" . $user_rol['tipo'] . "</option>";
                        }
                        echo "</select><br>";
                    }
                    echo "<input type='submit' value='ACTUALIZAR'>";
                    echo "</form>";
                } else {
                    echo "No coincide la contraseña";
                    echo "<a href='index.php'>Pulsar para volver a la pantalla de login</a>";
                }
            } else {
                echo "No exite el usuario";
                echo "<a href='index.php'>Pulsar para volver a la pantalla de login</a>";
            }
        } else {
            header('Location:index.php');
        }
        ?>

    </div>
</body>

</html>