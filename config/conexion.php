<?php 

Class Conectar{
    public static function conexion(){
        $sql=mysqli_connect('localhost','root','','login_karenv1');
        $sql->query("SET NAMES 'utf-8'");
        return $sql;
    }
}

