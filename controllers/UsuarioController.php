<?php
require_once 'models/usuario.php';
class UsuarioController
{
    public function index()
    {
        return require_once 'views/usuario/login.php';
    }
    public function vista(){
        return require_once 'views/usuario/vista.php';

    }
    public function login()
    {
        if (isset($_POST)) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            $usuario = new Usuario();
            $usuario->setName($name);
            $usuario->setPassword($password);
            $identity = $usuario->logear();
            if ($identity && is_object($identity)) {
                $_SESSION['identity'] = $identity;
                if ($identity->rol == 'admin') {
                    $_SESSION['admin'] = true;
                }else{
                    $_SESSION['admin'] = false;
                }
                header("Location:" . base_url.'usuario/vista');
            } else {
                $_SESSION['error_login'] = 'identificacion fallida';
                header("Location:" . base_url);
            }
        }
    }
    public function logout(){
        if(isset($_SESSION['identity'])){
            unset($_SESSION['identity']);
        }
        if(isset($_SESSION['admin'])){
            unset($_SESSION['admin']);
        }
        header("Location:".base_url);
    }

}
