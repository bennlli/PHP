<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Jugadores CRUD</title>
</head>
<body>
<h2>Formulario Jugadores CRUD</h2>
    <form action="jugador_nuevo.php" method="POST">
        <label for="name">Nombre</label><br>
            <input type="text" name="nombre" id="nombre"><br><br>
        <label for="name">Procedencia</label><br>
            <input type="text" name="procedencia" id="procedencia"><br><br>
        <label for="name">Altura</label><br>
            <input type="text" name="altura" id="altura"><br><br>
        <label for="name">Peso</label><br>
            <input type="text" name="peso" id="peso"><br><br>
        <label for="name">Posicion</label><br>
            <input type="text" name="posicion" id="posicion"><br><br>
        <label for="name">Equipo</label><br>
            <input type="text" name="equipo" id="equipo"><br><br>


        <input type="submit" value="enviar">
    </form>
</body>
</html>
