<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Probando</h1>
    <?php
    
            echo "El color rojo es: #" . dechex($_POST["rojo"]) . " " .dechex($_POST["rojo1"]) ." ". dechex($_POST["rojo2"]) . "<br>";
            echo "El amarillo es : " . dechex($_POST["amarillo"]) . "<br>";    
            echo "El color azul es: " . dechex($_POST["azul"]). "<br>";
    ?>
    
</body>
</html>