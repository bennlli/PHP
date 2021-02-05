<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>

<body>
    <!-- 
        Una  página  de  carrito  que  nos  mostrará  cuantos  productos  hemos comprado y de que tipo
    -->
    <p><span>USTED SE ENCUENTRA EN EL CARRITO DE COMPRAS.</span></p>
    <p>Numeros de productos: </p>
    <?php
    // Creamos un array para cada elemento e ir guardando la informacion de la compra
    $valores1 = array();
    $valor1 = serialize($valores1);

    $valores2 = array();
    $valor2 = serialize($valores2);

    $valores3 = array();
    $valor3 = serialize($valores3);

    $valores4 = array();
    $valor4 = serialize($valores4);

    // Usamos isset para comprbar que no es null y el !empty para ver que no esta vacio el valor.
    if (isset($_POST['art1']) && !empty($_POST['number1'])) {
        $art1 = $_POST['art1'];
        $cantidad1 = $_POST['number1'];
        // Cargaremos los valores al array
        $valor1 = array($art1, $cantidad1);

        // Imprimimos algo de informacion para guiarnos
        echo 'El articulo selecionado es: ' . $art1 . ' <br>';
        echo 'Precio 5€ y la cantidad selecionada es ' . $cantidad1 . '.<br>';
        echo 'Total: ' . ($cantidad1 * 5) . '<br><br>';

        // Declaramos la cookie para poder almacenar los valores guardados y el serialize para poder usar el array 'como un portador'
        setcookie("compra1", serialize($valor1), time() + 3600);
    } else {
        echo 'No ha seleccionado ningun producto.<br><br>';
        $info = unserialize($_COOKIE['compra1']);
        echo '<b>Tenias de la compra anterior en el carro: </b><br>';
        foreach ($info as $valores) {
            echo 'producto: ' . $valores . '.<br>';
        }
    }
    echo '<br><br>';
    //------------------------------------------------------------------------------
    if (isset($_POST["art2"]) && !empty($_POST["number2"])) {
        $art2 = $_POST['art2'];
        $cantidad2 = $_POST['number2'];
        $valor2 = array($art2, $cantidad2);

        echo 'El articulo selecionado es: ' . $art2 . ' <br>';
        echo 'Precio 5€ y la cantidad selecionada es ' . $cantidad2 . '.<br>';
        echo 'Total: ' . ($cantidad2 * 10) . '<br><br>';
        // Declaramos la cookie para poder almacenar los valores guardados y el serialize para poder usar el array 'como un portador'
        setcookie("compra2", serialize($valor2), time() + 3600);
    } else {
        echo 'No ha seleccionado ningun producto.<br><br>';
        $info = unserialize($_COOKIE['compra2']);
        echo '<b>Tenias de la compra anterior en el carro: </b><br>';
        foreach ($info as $valores) {
            echo 'producto: ' . $valores . '.<br>';
        }
    }
    echo '<br><br>';
    //------------------------------------------------------------------------------
    if (isset($_POST["art3"]) && !empty($_POST["number3"])) {
        $art3 = $_POST['art3'];
        $cantidad3 = $_POST['number3'];
        $valor3 = array($art3, $cantidad3);

        echo 'El articulo selecionado es: ' . $art3 . ' <br>';
        echo 'Precio 5€ y la cantidad selecionada es ' . $cantidad3 . '.<br>';
        echo 'Total: ' . ($cantidad3 * 15) . '<br><br>';
        // Declaramos la cookie para poder almacenar los valores guardados y el serialize para poder usar el array 'como un portador'
        setcookie("compra3", serialize($valor3), time() + 3600);
    } else {
        echo 'No ha seleccionado ningun producto.<br><br>';
        echo 'No ha seleccionado ningun producto.<br><br>';
        $info = unserialize($_COOKIE['compra3']);
        echo '<b>Tenias de la compra anterior en el carro: </b><br>';
        foreach ($info as $valores) {
            echo 'producto: ' . $valores . '.<br>';
        }
    }
    echo '<br><br>';
    //------------------------------------------------------------------------------
    if (isset($_POST["art4"]) && !empty($_POST["number4"])) {
        $art4 = $_POST['art4'];
        $cantidad4 = $_POST['number4'];
        $valor4 = array($art4, $cantidad4);

        echo 'El articulo selecionado es: ' . $art4 . ' <br>';
        echo 'Precio 5€ y la cantidad selecionada es ' . $cantidad4 . '.<br>';
        echo 'Total: ' . ($cantidad4 * 20) . '<br><br>';
        // Declaramos la cookie para poder almacenar los valores guardados y el serialize para poder usar el array 'como un portador'
        setcookie("compra4", serialize($valor4), time() + 3600);
    } else {
        echo 'No ha seleccionado ningun producto.<br><br>';
        echo 'No ha seleccionado ningun producto.<br><br>';
        $info = unserialize($_COOKIE['compra4']);
        echo '<b>Tenias de la compra anterior en el carro: </b><br>';
        foreach ($info as $valores) {
            echo 'producto: ' . $valores . '.<br>';
        }
    }

    ?>

    <a href="index1.php">Este enlace te llavara al index.</a>
</body>

</html>