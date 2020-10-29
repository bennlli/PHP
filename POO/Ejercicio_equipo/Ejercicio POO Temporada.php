<?php
    
    # Nos sirve para referenciar todo lo anterior archivo en este
    # Podemos decir que lo incluimos 
    include 'Ejercicio POO Jugador.php';
    include 'Ejercicio POO Equipo.php';

    # Creamos un objeto, pasandole los valores deseados
    # 'Nuevo.obj' = 'obj (valores)' 
    $Jugador1 = new Jugador(0,0);
        $Jugador1 -> addPtos();
    $Equipo1 = new Equipo(0,0);
        $Equipo1 -> addJug();
?>