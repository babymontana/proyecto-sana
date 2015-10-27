<?php
class loginData{
    
    function data($clave, $password){
          require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    
    $rs = $conexion->query( "SELECT `PK_usuario`,`clave`,`nombre` FROM `Usuarios` WHERE `clave`='$clave' AND `password`='$password'");
    if($fila = $rs->fetch_assoc()){
        $result[]=$fila;
    }
    return $result;
      
    
    
    }
    
    
    
}

?>