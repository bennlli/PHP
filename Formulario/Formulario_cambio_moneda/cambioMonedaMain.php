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
    # ********************************************************************************
    #                               EUR - GBP
    # ********************************************************************************
    # Comprobamos si '$_POST['euros']' tiene dato y si no esta vacío
    if (isset($_POST['euros']) && !empty($_POST['euros'])) {

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
    echo $valorEnEuros.'EUR = '.$conversionLibra.'GBP <hr>';
    
    }
    ?>

    <?php
    # ********************************************************************************
    #                               GBP - EUR 
    # ********************************************************************************
    # Comprobamos si '$_POST['libras']' tiene dato y si no esta vacío
    if (isset($_POST['libras']) && !empty($_POST['libras'])) {
    
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
    echo $valorEnLibras.'GBP = '.$conversionEuro.'EUR<hr>';
   
    }
    ?>
    <?php
    # ********************************************************************************
    #                               EUR - US
    # ********************************************************************************
    # Comprobamos si '$_POST['Dollar']' tiene dato y si no esta vacío
    if (isset($_POST['dollar']) && !empty($_POST['dollar'])) {
    
        # Volcamos la informacion del input 'Dollar'
        $valorEnDollares = $_POST['dollar'];
        # Creamos el nuevo objeto EUR - US
        $dollar = new conversion();
        # Almacenamos el valor 'setDollares' en '$valorEUR'
        $valorUS = $dollar -> setDollares($valorEnDollares);
        # Almacenamos el valor de la funcion 'converEurosUs()' en '$conversionDollar'
        $conversionDollar = $dollar -> converEurosUs();
    
        echo 'El valor en Euros introducido es de '.$valorEnDollares.'EUR<br>';
        echo 'El cambio a US es de '.$dollar ->converEurosUs($valorUS).'US<hr>';
        echo $valorEnDollares.'EUR = '.$conversionDollar.'US<hr>';
        
        }
    ?>
        <?php 
        # ********************************************************************************
        #                               US - EUR
        # ********************************************************************************
        # Comprobamos si '$_POST['EUDollar']' tiene dato y si no esta vacío
        if (isset($_POST['EUDollar']) && !empty($_POST['EUDollar'])) {

        # Volcamos la informacion del input 'EUDollar'
        $valorEnEurosUS = $_POST['EUDollar'];
        # Creamos el nuevo objeto
        $eurUsa = new conversion();
        # Almacenamos el valor del 'setEuros' en '$valor'
        $valorUS = $eurUsa -> setDollares($valorEnEurosUS);
        # Almacenamos el valor de la funcion 'converUsEuro()' en '$conversionEurUs'
        $conversionEurUs = $eurUsa -> converUsEuro();

        echo 'El valor de dollares introducido es de '.$valorEnEurosUS.'US<br>';
        echo 'El cambio a Euros es de '.$eurUsa ->converUsEuro($valorUS).'EUR<hr>';
        echo $valorEnEurosUS.'US = '.$conversionEurUs.'EUR <hr>';
        
        }
    ?>

</body>
</html>