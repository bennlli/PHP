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
    # Volcamos la informacion del input 'Euros'
    $valorEnEuros = $_POST['euros'];
    
    # Creamos el nuevo objeto
    $libra = new conversion();
    # Almacenamos el valor del 'setEuros' en '$valor'
    $valor = $libra -> setEuros($valorEnEuros);
    # Almacenamos el valor de la funcion 'converEurosLibras()' en '$conversionLibra'
    $conversionLibra = $libra -> converEurosLibra();

    echo 'El valor de euros introducido es de '.$valorEnEuros.'EUR<br>';
    echo 'El cambio a Libras es de '.$libra ->converEurosLibra($valor).'GBP<hr>';
    echo $valorEnEuros.'EUR = '.$conversionLibra.'GBP';
    ?>

    <?php
    # Volcamos la informacion del input 'Libras'
    $valorEnLibras = $_POST['libras'];

    # Creamos el nuevo objeto GBP - EUR
    $euro = new conversion();
    # Almacenamos el valor 'setLibras' en '$valorEUR'
    $valorEUR = $euro -> setLibras($valorEnLibras);
    # Almacenamos el valor de la funcion 'convertirLibrasEuros()' en '$conversionEuro'
    $conversionEuro = $euro -> converLibrasEuros();

    echo 'El valor en Libras introducido es de '.$valorEnLibras.'GBP<br>';
    echo 'El cambio a Euros es de '.$euro ->converLibrasEuros($valorEUR).'EUR<hr>';
    echo $valorEnLibras.'GBP = '.$conversionEuro.'EUR';

    ?>
    
</body>
</html>