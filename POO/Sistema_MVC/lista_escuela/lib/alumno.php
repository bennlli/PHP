<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Alumno</title>
</head>
<body>
<h2>Formulario alumno clase</h2>
    <form action="alumnoNuevo.php" method="POST">
        <label for="name">Nombre</label><br>
            <input type="text" name="nombre" id="nombre"><br><br>
        <label for="name">Apellido</label><br>
            <input type="text" name="apellido" id="apellido"><br><br>
        <label for="name">edad</label><br>
            <input type="text" name="edad" id="edad"><br><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>