<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Datos del usuario.</h1>
    <form action="comprueba_login.php" method="POST">

        <label for="usuario">Login: </label><br>
        <input type="text" name="login"  required><br><br>
        <label for="contraseña">Password: </label><br>
        <input type="password" name="pass"  required><br><br>
        
        <input type="submit" value="Entrar"><br><br>

        <a href="registro.php">Registrarse</a>


    </form>
</body>

</html>