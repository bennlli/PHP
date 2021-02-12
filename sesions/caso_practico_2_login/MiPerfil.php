<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil </title>
</head>
<body>
    <form action="" method="POST"></form>
        <label for="email">email: </label><br>
        <input type="email" name="email" id="email"><br><br>
        
        <label for="name">Nombre</label><br>
        <input type="text" name="name" id="name"><br><br>

        <label for="lname">Apellidos</label><br>
        <input type="text" name="lname" id="lname"><br>
        <br>
        <input type="submit" value="Actualizar"><br><br>
        <br><hr>

        <?php
        //Control de acciones a realizar
        if(isset($_POST["accion"])){
            //Registro de un usuario
            if($_POST["accion"]=="registro"){
                if($_POST["pass0"]==$_POST["pass1"]){
                    $usuario_nuevo = new Usuario();

                    $usuario_registrado = $usuario_nuevo->insertar_Usuario($_POST["nombre"],$_POST["apellidos"],$_POST["usuario"],$_POST["pass0"]);
                    
                    if($usuario_registrado!=null){
                        echo "<h1>USuario registrado correctamente</h2>";
                        echo "<label>Nombre</label>";
                        echo "<input type='text' value=".$usuario_registrado["nombre"]." readonly>";
                        echo "<label>Apellidos</label>";
                        echo "<input type='text' value=".$usuario_registrado["apellidos"]." readonly>";
                        echo "<label>Usuario</label>";
                        echo "<input type='text' value=".$usuario_registrado["usuario"]." readonly>";
                        echo "<br><a ref=index1.php>Ir al login</a>";
                    }else{
                        //Usuario no insertado
                        echo "<h1>Usuario no insertado.</h1>";
                        echo "<br><a ref=registro.php>Ir al registro</a>";
                    }
            }else{
                //Contraseñas incorrectas o diferentes
                echo "<h1>La contraseña no es correcta.</h1>";
                echo "<br><a ref=registro.php>Ir al registro</a>";

            }
        }
        ?>
        



</body>
</html>