<?php
# Clase para establecer la conexión.
class dbEmpresa
{
    # Atributos de la conexión.
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'empresas';
    private $port = '3306';

    # Mensajes de la conexión.
    private $men1 = '<h3>Conexión fallida</h3>';
    private $men2 = '<h3>Conexión realizada exitosamente</h3><hr>';

    # Conexión.
    private $con;

    # Error.
    private $error = false;

    # Constructor con la declaración de la conexión.
    function __construct()
    {
        $this->con = new mysqli($this->host, $this->user, $this->pass, $this->db, $this->port);
        if ($this->con->connect_errno) {
            $this->error = true;
            echo $this->men1;
        } else {
            echo $this->men2;
        }
    }

    # Función para saber si hay error en la conexión.
    function error()
    {
        return $this->error;
    }



    # Función genérica para crear consultas.
    public function consultas($consulta)
    {
        if (!$this->error()) {
            $resultado = $this->con->query($consulta);
            return $resultado;
        } else {
            return null;
        }
    }


    # Función para devolver el resultado de empleados
    public function devolver_empleados()
    {
        # Creamos la consulta.
        $sql = "SELECT * FROM empleados";
        # Almacenamos los resultados de la función.
        $resultadoEmpleados = $this->consultas($sql);
        if ($resultadoEmpleados != null) {
            # Creamos el array
            $tabla = [];
            # Foreach para recorrer la tabla
            foreach ($resultadoEmpleados as $fila) {
                # Almacenamos los datos en el array
                $tabla[] = $fila;
            }
            return $tabla;
        } else {
            return null;
        }
    }

    # Función para insertar empleados
    public function insertar_empleado($name_emp, $pos_emp, $boss_emp, $date_start, $bene, $comi, $num_dep)
    {
        $men = '<h3>Inserción de datos exitosa.</h3><br>';

        # Creamos la consulta para insertar.
        $sql = " INSERT INTO empleados(nombre,puesto,jefe,fechaalta,salario,comision,dnumero) 
        VALUES ('" . $name_emp . "','" . $pos_emp . "','" . $boss_emp . "','" . $date_start . "','" . $bene . "','" . $comi . "','" . $num_dep . "')";
        $resultadoEmpleado = $this->consultas($sql);
        echo $men;
        return $resultadoEmpleado;
    }

    # Función para actualizar
    public function actualizar_empleado($name_emp, $pos_emp, $boss_emp, $date_start, $bene, $comi, $num_dep)
    {
        $men = '<h3>Actualización de datos exitosa.</h3><br>';

        # Creamos la consulta para actualizar.
        $sql = " UPDATE empleados 
        SET nombre='.$name_emp.', puesto='.$pos_emp.', jefe='.$boss_emp.', fechaalta='.$date_start.', 
        beneficio='.$bene.', comision='.$comi.', dnumero='.$num_dep.'";
        $resultadoEmpleado = $this->consultas($sql);
        echo $men;
        return $resultadoEmpleado;
    }

    //Funcion para Borrar empleados
    public function borrar_empleado($name_emp)
    {
        # Creamos la consulta.
        $sql = "DELETE FROM empleados Where Nombre='$name_emp'";
        # Almacenamos los resultados de la función.
        $resultado = $this->consultas($sql);
        return $resultado;
    }
}
