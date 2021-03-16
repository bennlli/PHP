<?php

class Seguridad{
    //creado para mantener la sesion 
    function __construct(){
        session_start();
        if(isset($_SESSION['usuario'])){
            $this->usuario = $_SESSION['usuario'];
        }else{
            $_SESSION['usuario'] = null;
        }
        if(!isset($_SESSION['nombre'])){
            $_SESSION['nombre'] = null;
        }
        if(!isset($_SESSION['apellidos'])){
            $_SESSION['apellidos'] = null;
        }
        if(!isset($_SESSION['tipo_error'])){
            $_SESSION['tipo_error'] = null;
        }
    }

    //añadimos el usuario a la sesion
    public function add_user($usuario){
        $_SESSION['usuario'] = $usuario;
        $this->usuario = $usuario;

    }

    //borrar datos de la session
    public function borrar_datos(){
        $_SESSION['usuario'] = null;
        $_SESSION['nombre'] = null;
        $_SESSION['apellidos'] = null;
        $_SESSION['tipo_error'] = null;
        session_destroy();

    }
    //borrar datos formulario
    function limpiar_string($string)
    {
        $string = stripslashes($string);
        $string = strip_tags($string);
        $string = htmlentities($string);
        return $string;
    }

    #sacara el error
    public function set_error($tipo_error)
    {
        $_SESSION["tipo_error"] = $tipo_error;
    }
}

?>