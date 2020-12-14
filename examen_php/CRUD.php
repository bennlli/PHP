<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
    <body>
        <?php
        # Incluimos el archivo donde tenemos todo.
        include 'db.php';
        # Hacemos la llamada al objeto para establecer la conexión.

        # Hacemos la llamada al objeto para obtener la información deseada.
        $empleados = new dbEmpresa();

        # -------------------------------------------------------------------------------------
        # Volcamos la información del formulario.
        $nombre = $_POST['nombre'];
        $pos_emp = $_POST['pos_emp'];
        $boss_emp = $_POST['jefe'];
        $date_start = $_POST['date_start'];
        $bene = $_POST['bene'];
        $comi = $_POST['comi'];
        $num_dep = $_POST['num_dep'];

        # -------------------------------------------------------------------------------------
        # Llamada a la función para devolver alumnos 
        $resultado = $empleados->devolver_empleados();
        
        # -------------------------------------------------------------------------------------
        # Función para insertar alumnos
        # Comprobacion de campos vacios con el isset y el empty.
        if (
            isset($nombre, $pos_emp, $boss_emp, $date_start, $bene, $comi, $num_dep)
            && !empty($nombre) && !empty($pos_emp) && !empty($boss_emp) && !empty($date_start) && !empty($bene) && !empty($comi) && !empty($num_dep)
        ) {
            # Estanciamos el nuevo objeto
            $empleados1 = new dbEmpresa();
            # Llamamos a la función con sus correspodientes parámetros
            $empleados1->insertar_empleado($nombre, $pos_emp, $boss_emp, $date_start, $bene, $comi, $num_dep);;
            echo "Dato ingresado correctamente!!";
        } else {
            echo 'Te has dejado algun campo vacio, por favor termina de rellenarlo.';
        }

        # -------------------------------------------------------------------------------------
        # Llamada a la unción para actualizar alumnos
        # Comprobacion de campos vacios con el isset y el empty.
        if (
            isset($nombre, $pos_emp, $boss_emp, $date_start, $bene, $comi, $num_dep)
            && !empty($nombre) && !empty($pos_emp) && !empty($boss_emp) && !empty($date_start) && !empty($bene) && !empty($comi) && !empty($num_dep)
        ) {
            # Estanciamos el nuevo objeto
            $empleados2 = new dbEmpresa();
            # Llamamos a la función con sus correspodientes parámetros
            $empleados2->actualizar_empleado($nombre, $pos_emp, $boss_emp, $date_start, $bene, $comi, $num_dep);;
            echo "Dato actualizado correctamente!!";
        } else {
            echo 'Algo fallo.';
        }


        # -------------------------------------------------------------------------------------
        # Llamada a la función para borrar alumnos
        $empleados3 = new dbEmpresa;
        $empleados3 ->borrar_empleado($nombre);



        ?>
<br>
<hr>
</body>

</html>