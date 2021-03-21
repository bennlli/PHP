<?php

// Donde crearemos la conexión contra la base datos
class db
{
    // Atributos de la conexión
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db_name = "usuarios";

    // Conector
    private $conexion;

    // Errores
    private $error = false;
    private $error_msj = "Error en la conexión con la base de datos. Revisa la conexión.";
    private $msj = "Conexion exitosa con la bd.<br>";

    // Constuctor para establecer la conexión
    function __construct()
    {
        $this->conexion = new mysqli($this->host, $this->user, $this->password, $this->db_name);

        if ($this->conexion->connect_errno) {
            $this->error = true;
            echo $this->error_msj;
        } else {
            echo $this->msj;
        }
        $this->conexion->query("SET NAMES 'UTF8'");
    }

    // Función para saber si hay error en la conexión
    function hay_Error()
    {
        return $this->error;
    }

    // Función que nos devuelve el mensaje del error
    function msj_Error()
    {
        return $this->error_msj;
    }

    // Función que hace la consulta a la base de datos
    public function consulta($consulta)
    {
        if ($this->error == false) {
            $resultado = $this->conexion->query($consulta);
            return $resultado;
        } else {
            $this->error_msj = "No se ha podido conectar con la base de datos." . $consulta;
            return null;
        }
    }
}
