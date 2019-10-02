<?php

class Usuario{
    private $name;
    private $password;
    private $rol;
    private $db;
    public function __construct()
    {
        $this->db=Conectar::conexion();

    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getRol(){
        return $this->rol;
    }
    public function setRol($rol){
        $this->rol=$rol;
    }

    public function getPassword(){
        return $this->password;
    }
    public function setPassword($password){
        $this->password=$password;
    }

    public function logear(){
        $resultado=false;
        $name=$this->name;;
        $pass=$this->password;;
        $sql="SELECT*from usuarios where name='$name' and password='$pass' ";
        $inyeccion=$this->db->query($sql);
        if($inyeccion && $inyeccion->num_rows==1){
            $usuario = $inyeccion->fetch_object();
            //esto es cuando esta encriptado la contraseña  $verify = password_verify($password, $usuario->password);
            $resultado=$usuario;
        }
        return $resultado;
    }

}


