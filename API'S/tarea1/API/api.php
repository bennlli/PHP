<?php

include_once 'usuarios.php';

// Vemos el tipo de peticion
$requestMode = $_SERVER['REQUEST_METHOD'];

if ($requestMode == "GET") {
    // Comprobamos el nombre que obtenemos
    if (isset($_GET['nombre']) && !is_null($_GET['nombre'])) {

        // Instanciamos la clase
        $usuarios = new Usuarios();

        // Volcamos la informacion obtenida 
        $resultado = $usuarios->getUsuarios($_GET['nombre']);
        // Volcamos los datos descifrados a la variable
        $datos = json_decode($resultado, true);
        echo "<h1> Datos del  usuario: </h1>";
        echo "<h2> Nombre: " . $datos['nombre'] . " </h2>";
        echo "<h2> Apellidos: " . $datos['apellidos'] . " </h2>";
        echo "<h2> Edad: " . $datos['edad'] . " </h2>";
        echo "<h2> ID: " . $datos['id'] . " </h2>";

        echo "JSON->". $resultado;
    } else {
        echo json_encode(["resultado" => "Error: No se ha especificado el nombre del usuario"]);
    }
} elseif ($request == "POST") {
    // Obtenemos los parametros de la aplicacion POSTMAN
    if (
        isset($_POST['nombre']) && !is_null($_POST['nombre'])
        && isset($_POST['apellidos']) && !is_null($_POST['apellidos'])
        && isset($_POST['edad']) && !is_null($_POST['edad'])
    ) {

        $usuarios = new Usuarios();

        $array = array('nombre' => $_POST['nombre'], 'apellidos' => $_POST['apellidos'], 'edad' => $_POST['edad']);
        $datos = json_encode($array);

        $usuarios->insertUsuario($datos);
        echo "<h1>Se ha insertado el usuario " . $_POST['nombre'] . " </h1>";

        // Mostraremos tras actualizar la informacion
        $resultado = $usuarios->getUsuarios($_POST['nombre']);
        $datos = json_decode($resultado, true);
        echo "<h1>Datos del usuario </h1>";
        echo "<h2>Nombre: " . $datos['nombre'] . " </h2>";
        echo "<h2>Apellidos: " . $datos['apellidos'] . " </h2>";
        echo "<h2>Edad: " . $datos['edad'] . " </h2>";
        echo "<h2>Id: " . $datos['id'] . " </h2>";
    } else {
        echo json_encode(["resultado" => "Error: No se han especificado los parámetros"]);
    }
} elseif ($request == "PUT") {
    // Obtenemos los parametros de la aplicacion POSTMAN
    if (
        isset($_GET['id']) && !is_null($_GET['id'])
        && isset($_GET['nombre']) && !is_null($_GET['nombre'])
        && isset($_GET['apellidos']) && !is_null($_GET['apellidos'])
        && isset($_GET['edad']) && !is_null($_GET['edad'])
    ) {

        $usuarios = new Usuarios();

        $array = array('nombre' => $_GET['id'], $_GET['nombre'], 'apellidos' => $_GET['apellidos'], 'edad' => $_GET['edad']);
        $datos = json_encode($array);

        $usuarios->updateUsuarios($datos);
        echo "<h1> Se ha actualizado el usuario con la ID " . $_GET['id'] . "</h1>";
    } else {
        echo "<h1> No se han especificado los parametros </h1>";
    }
} elseif ($requestMode == "DELETE") {
    // Obtenemos el nombre
    if (isset($_GET['nombre']) && !is_null($_GET['nombre'])) {
        // Instanciamos la clase
        $usuarios = new Usuarios();

        // Volcamos la informacion obtenida 
        $array = array('nombre' => $_GET['nombre']);
        
        // Codificamos los datos
        $datos = json_encode($array);
        $resultado = $usuarios->borrarUsuario($datos);

        if($resultado != null){
            echo "<h1> Se ha borrado el usuario" . $_GET['nombre'] . "</h1>";
        }else{
            echo "<h1> Upss, tenemos un problema al borrar el usuario</h1>";
        }
    }
    echo "<h1> No sen han especificado los parametros</h1>";
}
