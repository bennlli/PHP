<?php

class BBDD {

    //atributos
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db_name="registro_practico";

    //Conector
    private $conexion;

    //Propiedades para controlar errores
    private $error=false;
    private $error_msj="";

    //Constructor
    function __construct() {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);

      if ($this->conexion->connect_errno) {
        $this->error=true;
        $this->error_msj="No se establecio la conexion con la base de datos.";
      }

      $this->conexion->query("SET NAMES 'UTF8'");
    }

    //Funcion para saber si hay error en la conexion
    function hayError(){
      return $this->error;
    }

    //Funcion para devolver mensaje error
    function msjError(){
      return $this->error_msj;
    }

    //Funcion para realizar consultas a la base de datos.
    public function realizar_Consulta($consulta){
      if($this->error==false){
        $resultado = $this->conexion->query($consulta);
        return $resultado;
      }else{
        $this->error_msj="No se puede realizar la consulta: ".$consulta;
        return null;
      }
    }

  }
?>
