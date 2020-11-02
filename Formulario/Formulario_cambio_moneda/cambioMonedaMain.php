<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EUR - GBP</title>

</head>
<body>
    <h1>Resultado de la conversion</h1>
    <?php include 'cambioMonedaPOO.php'?>
    <?php 
    # Volcamos la informacion del input
    $valorEnEuros = $_POST['euros'];
    
    # Creamos el nuevo objeto
    $libra = new conversion();
    # Almacenamos el valor del 'setEuros' en '$valor'
    $valor = $libra -> setEuros($valorEnEuros);
    # Almacenamos el valor de la funcion 'converEurosLibras()' en '$conversionLibra'
    $conversionLibra = $libra -> converEurosLibra();

    echo 'El valor de euros introducido es de '.$valorEnEuros.'EUR<br>';
    echo 'El cambio a libras es de '.$libra ->converEurosLibra($valor).'GBP<hr>';
    echo $valorEnEuros.'EUR = '.$conversionLibra.'GBP';
    ?>
    
</body>
</html>