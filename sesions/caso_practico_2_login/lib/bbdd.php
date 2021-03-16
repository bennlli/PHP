<?php
require_once 'conexion.php';

class BBDD extends Conexion{

  //hereda los atributos para realizar la conexion
  function __construct(){
    //propiedades heredadas del conexion
    parent::__construct();
  }
  
  //funcion para insertar
  public function insertar_user($nombre, $apellidos,$email, $rol = "usuario",$pass){

    //creamos el 'nuevo usuario'
    $nuevo_user = new Usuario();
    //encriptacion de la contraseña
    $pass_encrip = sha1($pass);

    //valores obtenidos del formulario
    $nuevo_user->setUsuario($email);
    $nuevo_user->setEmail($email);
    $nuevo_user->setPass($pass);
    $nuevo_user->setNombre($nombre);
    $nuevo_user->setApellidos($apellidos);
    $nuevo_user->setRol($rol);
    
    //insercion 
    $sql = "INSERT INTO usuarios (usuario, nombre, apellidos, email, rol, pass)
    VALUES ('".$email."','".$nombre."','".$apellidos."','".$email."','".$rol."','".$pass_encrip."',)";

    $resultado = $this->hacer_consulta($sql);
    if($resultado){
      $nuevo_user->setId($this->get_conexion()->insert_id);
      return $nuevo_user;
    }else{
      return null;
    }

  }

  //actualizar
  public function actualizar_user($usuario, $nombre, $apellidos){
    //creamos el nuevo usuario
  
    $modificar_user = new Usuario();

    $modificar_user->setUsuario($usuario);
    $modificar_user->setNombre($nombre);
    $modificar_user->setApellidos($apellidos);
   
    //modificacion
    $sql = "UPDATE usuarios SET nombre = '" . $nombre . "',apellidos = '" . $apellidos . "' WHERE usuario = '" . $usuario . "'";
    
    $resultado = $this->hacer_consulta($sql);
    if($resultado){
      return $modificar_user;
    }else{
      return null;
    }
  }

  //buscar usuario
  public function buscar_usuario($usuario, $pass)
    {
      $pass_encrip = sha1($pass);

        // Comprobar que la contraseña no sea null
        if ($pass != null) {

            // Consulta sql para la búsqueda del usuario
            $sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "' AND pass = '" . $pass_encrip . "'";
        } else {
            // Consulta que se hará si sólo se da el nombre del usuario/email
            $sql = "SELECT * FROM usuarios WHERE usuario = '" . $usuario . "'";
        }

        // Construcción de la consulta a la variable resultado
        $resultado = $this->hacer_consulta($sql);
        if ($resultado->num_rows > 0) {
            // Se crea un objeto de usuario para poder rellenar los datos encontrados en la bbdd
            $usuarioDevuelto = new Usuario();

            // Recorremos el resultado mientras haya datos y se asigna el valor encontrado al objeto
            for ($i = 0; $i < $resultado->num_rows; $i++) {
                if ($i == 0) {
                    // Se asigna a una variable el array asociativo de lo obtenido con fetch_assoc
                    $userData = $resultado->fetch_assoc();
                    $usuarioDevuelto->setId($userData['id']);
                    $usuarioDevuelto->setEmail($userData['email']);
                    $usuarioDevuelto->setNombre($userData['nombre']);
                    $usuarioDevuelto->setApellidos($userData['apellidos']);
                }
            }
            // Devolución del objeto ya rellenado con los datos necesarios
            return $usuarioDevuelto;
        } else {
            return null;
        }
    }

    //bucar roles
    public function recogerRoles()
    {
        $sql = "SELECT * FROM roles";
        $resultado = $this->hacer_consulta($sql);
        return $resultado;
    }

}
?>
