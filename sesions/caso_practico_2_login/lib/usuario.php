<?php

include_once "bbdd.php";

class Usuario extends BBDD
{

  function __construct()
  {
    //Usamos para establecer la conexion de nuevo con la bbdd
    parent::__construct();
  }

  //Funcion para insertar un usuario en la bbdd
  function insertar_Usuario($usuario, $nombre, $apellidos, $email, $rol, $pass)
  {
    //Contruccion de la consulta
    $sql = "INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `apellidos`, `email`, `rol`, `pass`) 
            VALUES (NULL, '" . $usuario . "', '" . $nombre . "', '" . $apellidos . "', '" . $email . "', '" . $rol . "', '" . sha1($pass) . "';";
    //Hacemos la consulta
    $resultado = $this->realizar_Consulta($sql);
    if ($resultado != false) {
      //Obtenemos el ultimo usuario 
      $sql = "SELECT * FROM usuarios ORDER BY id DESC";
      //Hacemos la consulta
      $resultado = $this->realizar_Consulta($sql);
      if ($resultado != false) {
        $tabla =  [];
        while ($fila = $resultado->fetch_assoc()) {
          $tabla[] = $fila;
        }
        return $tabla;
      } else {
        return null;
      }
    } else {
      return null;
    }
  }
}
