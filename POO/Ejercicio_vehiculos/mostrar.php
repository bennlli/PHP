<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'vehiculo.php';
    include 'cuatro_ruedas.php';
    include 'dos_ruedas.php';
    include 'coche.php';
    include 'camion.php';
    $vehiculo = new Vehiculo();
    $vehiculo->circular();
    $vehiculo->añadir_persona(70,1500);
    
    echo '<br>';
    $vehiculo1 = new Cuatro_ruedas();
    $vehiculo1->numero_puertas();
    $vehiculo1->repitnar('Negro');
    
    echo '<br>';
    $vehiculo2 = new Dos_ruedas();
    $vehiculo2->cilindrada();
    $vehiculo2->poner_gasolina(10,1500);
    echo '<br>';
    $vehiculo3 = new Coche();
    $vehiculo3->añadir_cadenas(2);
    $vehiculo3->quitar_cadenas();
    echo '<br>';
    $vehiculo4 = new Camion();
    $vehiculo4->mostrar_longitud();
    $vehiculo4->añadir_remolque(150);
    echo '<br>';
    $vehiculo->añadir_persona(130,1400);
    $vehiculo1->repitnar('verde');

    ?>
</body>
</html>