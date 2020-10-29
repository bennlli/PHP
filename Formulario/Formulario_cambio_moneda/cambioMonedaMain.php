<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    <h1>Resultado de la conversion</h1>
    <?php include 'cambioMonedaPOO.php'?>
    <?php 
    $libra = new conversion($_POST['euros']);
    $libra -> converEurosLibra($_POST['euros']);

    ?>
    
</body>
</html>