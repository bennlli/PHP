<?php
# 'escuela.php' debido a que se encuentra en la misma carpeta.
include 'db.php';

# Volcamos los POST en variables para que sea mas facil trabajar.
$nombre  = $_POST['nombre'];
$procedencia  = $_POST['procedencia'];
$altura = $_POST['altura']; 
$peso = $_POST['peso'];
$posicion = $_POST['posicion'];
$equipo = $_POST['equipo'];


# Comprobacion de campos vacios con el isset y el empty.
if(isset($nombre,$procedencia,$altura, $peso,$posicion,$equipo) && !empty($nombre) && !empty($procedencia) && !empty($altura)&& !empty($peso)&& !empty($posicion)&& !empty($equipo)){
    # Estanciamos el nuevo objeto
    $nuevoJug = new Jugador();
    # Llamamos a la función con sus correspodientes parámetros
    $nuevoJug->insertar_jugador($nombre,$procedencia,$altura, $peso,$posicion,$equipo); 
    $nuevoJug->borrar_jugadores($nombre);
    $nuevoJug->actualizar_jugador($nombre,$procedencia,$altura, $peso,$posicion,$equipo);
    echo "Dato ingresado correctamente!!";
}else{
    echo 'Te has dejado algun campo vacio, por favor termina de rellenarlo.';
    }

?>