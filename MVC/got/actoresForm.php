<?php 
include 'actoresTemp.php';

$episodio = $_POST['EP'];

# Instanciamos el objeto
$actoresEp = new ActoresTemp();
echo 'Temporada: '.$episodio.'<br>';
# Llamos la funcion para que nos retorne el resultado de la búsqueda.
    $resultadoTemp = $actoresEp->devolverActoresSeasonOption($episodio);
    # Con el Foreach sacamos el resultado.
    foreach ($resultadoTemp as $filaTemp){
        echo $filaTemp['name'].'<br>';
    }


?>