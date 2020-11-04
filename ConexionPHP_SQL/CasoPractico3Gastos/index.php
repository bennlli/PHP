<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
    <?php 
    # Conexión.
    $mysqli = new mysqli('localhost','root','','beneficios',3306);
    if($mysqli -> connect_errno){
        # ERROR.
        echo 'Fallo al conectar con la base de datos :('.$mysqli->connect_errno.')'.$mysqli->connect_error;
    }else{
        # CORRECTA.
        echo '<h3>Conexión establecidad satisfactoriamente</h3><hr>';
    }
    ?>
    <h2><a href="total.php">Total de gastos y ventas.</a></h2>
    <h2><a href="ben_1.php">Lo beneficios de la primera semana.</a></h2>
    <h2><a href="ben_2.php">Lo beneficios de la segunda semana.</a></h2>

</body>
</html>