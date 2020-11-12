<?php
# 'escuela.php' debido a que se encuentra en la misma carpeta.
include 'escuela.php';

# Volcamos los POST en variables para que sea mas facil trabajar.
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];

# Comprobacion de campos vacios con el isset y el empty.
if(isset($nombre,$apellido,$edad) && !empty($nombre) && !empty($apellido) && !empty($edad)){
    # Estanciamos el nuevo objeto
    $nuevoAlumno = new Escuela();
    # Llamamos a la función con sus correspodientes parámetros
    $nuevoAlumno->insertarAlumnos($nombre,$apellido,$edad); 
    echo "Dato ingresado correctamente!!";
}else{
    echo 'Te has dejado algun campo vacio, por favor termina de rellenarlo.';
    }
?>