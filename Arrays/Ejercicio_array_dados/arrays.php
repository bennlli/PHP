<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h3>Array con "for"</h3>
<?php 

    // 1º ALMACENAR EN UN ARRAY LOS 10 PRIMEROS NUMEROS PARES 
    //Definimos el array, en este caso 
    $arrayPAR = array (0,1,2,3,4,5,6,7,8,9,10); 
    //Un count para poder especificar y meter el largo recorrera el 'for' 
    $arraylenght = count($arrayPAR); 
        for ($i=0; $i < $arraylenght ; $i++) { 
        if ($i%2==0) {
            echo $arrayPAR[$i]; 
            echo '<br>'; 
         }
        } 

    echo '<h3>Array con "foreach"</h3>';
    //OTRA FORMA DE HACER 
    //Otra forma de definir arrays
    $arrayFOREACH = [0,2,3,4,6,8,10]; 
    foreach ($arrayFOREACH as $FOREACH) { 
        echo $FOREACH . '<br>'; 
    }

    // 2º TIRADA DE DADOS, CON NUMEROS ALEATORIOS
    echo '<h3>Tirada de dados aleatoria "4" dados </h3>'; 
    //Definimos el array, en el cual tenemos 4 arrays dentro cada 'array' simulara a un dado, en este caso 4 dados.    
    $arrayDados = array (array(1,2,3,4,5,6),array(1,2,3,4,5,6),array(1,2,3,4,5,6),array(1,2,3,4,5,6));
    //Necesitamos hacer un 'count' para saber el número de posiciones con la que cuenta el 'array' y con ello poder recorrerlo y conseguir ese numnero aleatorio.
    $arraylenghtDados = count($arrayDados);
        for ($i=0; $i < $arraylenghtDados ; $i++) { 
            //rand lo usamos para genera un número al azar, en este caso especificamos 1 y 6, que sera los valores en los que se mueva.
            echo (rand(1,6).'<br>');
        }

    echo '<h3>--------------------------</h3>'; 
    $entrada = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
    $claves_aleatorias = array_rand($entrada, 2);
    echo $entrada[$claves_aleatorias[0]] . "\n";
    echo $entrada[$claves_aleatorias[1]] . "\n";


    // 3º TIRADA DE DADO Y SUS RESULTADOS
    echo '<h3>Tirada de un dado y sus resultados al azar</h3>';
    echo (rand(2,7));

    
    


?> 

    </body>
</html>