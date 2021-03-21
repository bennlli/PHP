<?php

// Incluimos la clase db en este documento
include_once 'db.php';

// Creamos la clase y heredamos el contenido de la clase db
class Usuarios extends db
{

    function __construct()
    {
        parent::__construct();
    }

    //--------------------------------------------- CRUD ---------------------------------------------//
    // Funcion para obtener el usuario
    public function getUsuarios($nombre)
    {
        $sql = "SELECT * FROM usuario WHERE nombre= ' " . $nombre . " ';";
        // Almancenamos la consulta en la variable
        $resultado = $this->consulta($sql);
        // Compramos que no sea 'null'
        if ($resultado != null) {
            $usuario = $resultado->fetch_assoc();
            // Codificamos la informacion y la almacenamos 
            $json_equipo = json_encode($usuario);
            // Devolvemos la informacion codificada para su uso
            return $json_equipo;
        } else {
            // No retornamos nada
            return null;
        }
    }

    // Funcion para insertar el usuario
    public function insertUsuario($jsonUsuarios)
    {
        // Creamos un array donde almacenaremos los resultados decodificados
        $arrayDatos = json_decode($jsonUsuarios, true);
        // Creamos la consulta para la bd
        $sql = "INSERT INTO usuario(nombre, apellidos, edad) VALUES ('" . $arrayDatos['nombre'] . "','" . $arrayDatos['apellidos'] . "','" . $arrayDatos['edad'] . "');";
        // Almacenamos la consulta en la variable para retornarla
        $resultado = $this->consulta($sql);
        return $resultado;
    }

    // Funcion para hacer el update
    public function updateUsuarios($jsonUsuarios){
        // Creamos un array donde almacenaremos los resultados decodificados
        $arrayDatos = json_decode($jsonUsuarios, true);
        // Creamos la consulta para la bd
        $sql = "UPDATE usuario SET  nombre = '" . $arrayDatos['nombre'] . "',
                                    apellidos = '" . $arrayDatos['apellidos'] . "',
                                    edad = '" . $arrayDatos['edad'] . "',
                               WHERE id = '" . $arrayDatos['id']."';";
        // Volcamos la consulta en la variable                       
        $resultado = $this->consulta($sql);
        return $resultado;

    }

    // Funcion para borrar
    public function borrarUsuario ($jsonUsuarios){
       // Creamos un array donde almacenaremos los resultados decodificados
       $arrayDatos = json_decode($jsonUsuarios, true);
       // Creamos la consulta para la bd
       $sql = "DELETE FROM usuario WHERE nombre='".$arrayDatos['nombre']."';";
       // Volcamos la consulta en la variable 
       $resultado = $this->consulta($sql);
       return $resultado;
    }

}
