<?php

require_once 'clubbasquet.php';

$request_method = $_SERVER['REQUEST_METHOD'];


switch ($request_method) {

        # GET METHOD
    case 'GET':
    
        // Comprobamos que vengan todos los datos del formulario
        if (isset($_GET['nombreJugador']) && !is_null($_GET['nombreJugador'])) {
            // Creamos un nuevo objeto
            $jugador = new Jugador();
            $resultado = $jugador->get_Jugador($_GET['nombreJugador']);

            if ($resultado != null) {
                // Decodificamos la informacion
                $datos_decode = json_decode($resultado, true);

                echo '<p>Datos del Jugador:</p>';
                echo '<p>Nombre: '.$datos_decode['nombreJugador'].'</p>';
                echo '<p>Posición: '.$datos_decode['posicion'].'</p>';
                echo '<p>Número: '. $datos_decode['numero'].'</p>';
                echo '<p>Edad: '. $datos_decode['edad'] .'</p>';
            
            } else {
                echo "Error en la búsqueda.";
            }
        } else {
            echo "Upss, tenemos un error en los parámetros!.";
        }
        break;

        # PUT METHOD
    case 'PUT':
 
        // Comprobamos que vengan todos los datos del formulario
        if (isset($_GET['id']) && !is_null($_GET['id']) && 
            isset($_GET['nombreJugador']) && !is_null($_GET['nombreJugador']) && 
            isset($_GET['posicion']) && !is_null($_GET['posicion']) && 
            isset($_GET['numero']) && !is_null($_GET['numero']) && 
            isset($_GET['edad']) && !is_null($_GET['edad'])) 
        {
            // Creamos un nuevo objeto
            $jugador = new Jugador();

            // Almacenamos en un array asociativo
            $arrayJson = array(
                'id' => $_GET['id'], 'nombreJugador' => $_GET['nombreJugador'],
                'posicion' => $_GET['posicion'], 'numero' => $_GET['numero'], 'edad' => $_GET['edad']
            );
            // Se codifica la información
            $datos_encode = json_encode($arrayJson);
            $jugador->update_Jugador($datos_encode);
            echo 'Actualización exitosa de los datos.';
        } else {
            echo "Upss, tenemos un error en los parámetros!.";
        }
        break;

    default:
        echo 'Error en la ejecución de la API';
        break;
}