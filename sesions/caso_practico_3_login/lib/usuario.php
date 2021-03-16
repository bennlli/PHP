<?php


class Usuario{
  private $id;
  private $usuario;
  private $nombre;
  private $apellidos;
  private $email;
  private $rol;
  private $pass;


  

  /**
   * Get the value of id
   */ 
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set the value of id
   *
   * @return  self
   */ 
  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  /**
   * Get the value of usuario
   */ 
  public function getUsuario()
  {
    return $this->usuario;
  }

  /**
   * Set the value of usuario
   *
   * @return  self
   */ 
  public function setUsuario($usuario)
  {
    $this->usuario = $usuario;

    return $this;
  }

  /**
   * Get the value of nombre
   */ 
  public function getNombre()
  {
    return $this->nombre;
  }

  /**
   * Set the value of nombre
   *
   * @return  self
   */ 
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;

    return $this;
  }

  /**
   * Get the value of apellidos
   */ 
  public function getApellidos()
  {
    return $this->apellidos;
  }

  /**
   * Set the value of apellidos
   *
   * @return  self
   */ 
  public function setApellidos($apellidos)
  {
    $this->apellidos = $apellidos;

    return $this;
  }

  /**
   * Get the value of email
   */ 
  public function getEmail()
  {
    return $this->email;
  }

  /**
   * Set the value of email
   *
   * @return  self
   */ 
  public function setEmail($email)
  {
    $this->email = $email;

    return $this;
  }

  /**
   * Get the value of rol
   */ 
  public function getRol()
  {
    return $this->rol;
  }

  /**
   * Set the value of rol
   *
   * @return  self
   */ 
  public function setRol($rol)
  {
    $this->rol = $rol;

    return $this;
  }

  /**
   * Get the value of pass
   */ 
  public function getPass()
  {
    return $this->pass;
  }

  /**
   * Set the value of pass
   *
   * @return  self
   */ 
  public function setPass($pass)
  {
    $this->pass = $pass;

    return $this;
  }
}
