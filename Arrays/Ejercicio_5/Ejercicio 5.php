<?php

/*
        3 filas          4 columnas
             ingles=0  Frances=1 Aleman=2  Ruso=3
        basico ( 1      14          8       3)
        medio  ( 6      19          7       2)
        perfec ( 3      13          4       1)
*/
    #ALUMNO EXISTENTE EN CADA IDIOMA
    //Declaracion de 'ARRAY' [[0]=FILA] y [[0]=COLUMNA]
    $nivelBasico[0][0]=1;
    $nivelBasico[0][1]=14;
    $nivelBasico[0][2]=8;
    $nivelBasico[0][3]=3;

    //Declaracion de 'ARRAY' [[1]=FILA] y [[0]=COLUMNA]
    $nivelMedio[1][0]=6;
    $nivelMedio[1][1]=19;
    $nivelMedio[1][2]=7;
    $nivelMedio[1][3]=2;

    //Declaracion de 'ARRAY' [[2]=FILA] y [[0]=COLUMNA]
    $nivelPerf[2][0]=3;
    $nivelPerf[2][1]=13;
    $nivelPerf[2][2]=4;
    $nivelPerf[2][3]=1;

    //Iniciamos la variable en '0' para comenzar la suma
    $basico = 0;
    //'For' para ir recorriendo el 'array' y sumando los numeros que hay en el
    for ($fila=0; $fila <4 ; $fila++) { 
        $basico+=$nivelBasico[0][$fila];
        /*Forma no abreviada, sumariamos la varible '0' con el espacio '0' indicado en a'array'
        $basico = $basico + $nivelBasico[0][$fila];*/
    }
    //Para mostrar por pantalla el número de alumnos que son
    echo 'En el nivel básico son: '.$basico.'<br>';


    //Iniciamos la variable en '0' para comenzar la suma
    $medio = 0;
    //'For' para ir recorriendo el 'array' y sumando los numeros que hay en el
    for ($fila=0; $fila <4 ; $fila++) { 
        $medio += $nivelMedio[1][$fila];
    }
    //Para mostrar por pantalla el número de alumnos que son
    echo 'En el nivel intermedio son: '.$medio.'<br>';

    //Iniciamos la variable en '0' para comenzar la suma
    $perfec = 0;
    //'For' para ir recorriendo el 'array' y sumando los numeros que hay en el
    for ($fila=0; $fila <4 ; $fila++) { 
        $perfec+=$nivelPerf[2][$fila];
    }
    //Para mostrar por pantalla el número de alumnos que son
    echo 'En el nivel perfeccionamiento son: '.$perfec.'<br>';

    #PARA CADA NIVEL DE IDIOMA

    /*
        3 filas          4 columnas
            ingles=0  Frances=1 Aleman=2  Ruso=3
        basico ( 1      14          8       3)
        medio  ( 6      19          7       2)
        perfec ( 3      13          4       1)
*/
    //Iniciamos la variable en '0' para comenzar la suma
    $ingles = 0;
    for ($columna=0; $columna <3 ; $columna++) { 
        $ingles=$ingles+$nivelBasico[$columna][0]+$nivelMedio[$columna][0]+$nivelPerf[$columna][0];
    }
    
    echo 'El número de alumnos en Inglés es de '.$ingles.'<br>';
    //Iniciamos la variable en '0' para comenzar la suma
    $frances = 0;
    for ($columna=0; $columna <3 ; $columna++) { 
        $frances=$frances+$nivelBasico[$columna][1]+$nivelMedio[$columna][1]+$nivelPerf[$columna][1];
    }
    echo 'EL número de alumnos en Francés es de '.$frances.'<br>';
    //Iniciamos la variable en '0' para comenzar la suma
    $Aleman = 0;
    for ($columna=0; $columna <3 ; $columna++) { 
        $Aleman=$Aleman+$nivelBasico[$columna][2]+$nivelMedio[$columna][2]+$nivelPerf[$columna][2];
    }
    echo 'EL número de alumnos en Alemán es de '.$Aleman.'<br>';

    $Ruso = 0;
    for ($columna=0; $columna <3 ; $columna++) { 
        $Ruso=$Ruso+$nivelBasico[$columna][3]+$nivelMedio[$columna][3]+$nivelPerf[$columna][3];
    }
    echo 'EL número de alumnos en Ruso es de '.$Ruso.'<br>';
?>