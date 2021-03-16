<?php

class Conexion{
    //atributos
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db_name="registro_practico";

    private $conex;

    //errores
    private $error = false;
    private $error_msj = "";

    //conexion con la base de datos
    function __construct(){
        $this->conex = new mysqli($this->host, $this->user,$this->pass,$this->db_name);

        if($this->conex->connect_errno){
            $this->error = true;
        }
    }

    //funcion obtener conexion
    function get_conexion(){
        return $this->conex;
    }
    
    //funcion que devuelve el error en la conexion
    function get_error(){
        return $this->conex->error;
    }

    //funcion para saber si hay error con la conexion
    function hay_error(){
        return $this->error;
    }

    //funcion para devolver el mensaje de error
    function msj_error(){
        return $this->error_msj;
    }
    
    //funcion para consulta de la bbdd
    function hacer_consulta($consulta){
        //hacemos la consulta
        if(!$this->hay_error()){
            $resultado = $this->conex->query($consulta);
            return $resultado;
        //mostramos el error al hacer la consulta
        }else{
            $this->error_msj = "error al hacer la consulta. ".$consulta;
            return null;
        }
    }
}

?>