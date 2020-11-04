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
        echo '<h3>Conexión establecidad satisfactoriamente Index</h3><br><hr>';
    }
    ?>
    <?php include 'total.php'?>
    <?php include 'ben_1.php'?>
    <?php include 'ben_2.php'?>
    <h1>Datos obtenidos</h1>

</body>
</html>