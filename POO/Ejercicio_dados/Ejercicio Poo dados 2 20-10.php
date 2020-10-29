<?php
    
    # Nos sirve para referenciar todo lo anterior archivo en este
    # Podemos decir que lo incluimos 
    include 'Ejercicio POO dados 1 20-10.php';

    # Creamos un objeto, pasamos los valores que deseemos.
    $dado = new dado(50,-15);
        # Usamos for para que nos imprima cada tira del dado.
        for ($i=1; $i <12 ; $i++) { 
            echo 'Tirada '.$i. ':' .$dado->tiramosDados(). '<br>';
        }
?>