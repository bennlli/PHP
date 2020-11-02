<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Datos del formulario";?></h1>
    <?php 
    echo "Tipo de via: ".$_POST[("lugar")].", ".$_POST[("direccion")]."<br>";
    echo "Número: ".$_POST[("numero")]."<br>";
    echo "Población: ".$_POST[("poblacion")]."<br>";
    echo "País: ".$_POST[("pais")]."<br>";
    ?>
    
</body>
</html>