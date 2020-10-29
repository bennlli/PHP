<?php
//Definimos las variables
define('TAM_FILAS', 5);
define('TAM_COLUMNAS', 6);
$cero = 0;
$pos = 0;
$neg = 0;
    //'FOR' para recorrer el filas y luego columnas 
    for ($filas = 0; $filas < TAM_FILAS ; $filas++) { 
        for ($columnas=0; $columnas < TAM_COLUMNAS; $columnas++) { 
            //Definimos el 'ARRAY' de 'Filas' y 'Columnas', donde introducimos valores con 'RAND'
            $array[$filas][$columnas] = rand(-5,5);
                //Para comprobar que son '0'
                if ($array[$filas][$columnas] == 0) {
                    //Sumamos los valores que son '0'
                    $cero++;
                //Para comprobar que son '+'
                }elseif ($array[$filas][$columnas]>0) {
                    //Sumamos valores que son '+'
                    $pos++;
                #Ultimo caso que serían los '-'
                }else {
                    //Sumamos valores que son '-'
                    $neg++;
                }
        }
        
    }

	echo '<br><h2> RESULTADOS </h2>';
	echo 'Nº de ceros:'.$cero.'<br>';
	echo 'Nº de positivos:'.$pos.'<br>';
	echo 'Nº de negativos:'.$neg.'<br>';

?>