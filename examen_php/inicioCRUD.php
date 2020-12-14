<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="CRUD.php" method="POST">
        <label for="nombre">Nombre</label><br>
        <input type="text" name="nombre"><br><br>

        <label for="pos_emp">Posición del empleado</label><br>
        <input type="text" name="pos_emp"><br><br>

        <label for="jefe">Jefe</label><br>
        <input type="text" name="jefe"><br><br>

        <label for="date_start">Fecha de alta</label><br>
        <input type="text" name="date_start"><br><br>

        <label for="bene">Beneficios</label><br>
        <input type="text" name="bene"><br><br>

        <label for="comi">Comisiones</label><br>
        <input type="text" name="comi"><br><br>
        
        <label for="num_dep">Nº Departamento</label><br>
        <input type="text" name="num_dep"><br><br>

        <input type="submit" value="Añadir"><br>
    </form>
</body>

</html>