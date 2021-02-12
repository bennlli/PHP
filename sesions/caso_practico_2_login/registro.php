<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro </title>
</head>

<body>
    <form action="MiPerfil.php" method="POST">

    <label for="name">Nombre</label><br>
    <input type="text" name="name" id="nombre"><br><br>

    <label for="lname">Apellidos</label><br>
    <input type="text" name="lname" id="apellidos"><br><br>

    <label for="lname">Usuario</label><br>
    <input type="text" name="usuario" id="usuario"><br><br>

    <label for="contraseña">Password: </label><br>
    <input type="password" name="pass" id="pass0"><br><br>

    <label for="contraseña">Repetir Password: </label><br>
    <input type="password" name="pass" id="pass1"><br><br>
    
    <label for="email">Email: </label><br>
    <input type="email" name="email" id="email"><br><br>


    <input type="hidden" name="accion" value="registro">

    <input type="submit" value="Registrar"><br><br>
    </form>
</body>

</html>