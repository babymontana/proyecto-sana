<?php
session_start();
$clave=$_POST["clave"];
$password=$_POST["password"];

    if (!empty($password) && !empty($clave) ) {

        require_once "../classes/login.php";
        $login = new login();
        $result= $login->logging($clave,$password);
        
        if($login->getValido() == "1"){
            
            $_SESSION['valido']=$login->getValido();
            $_SESSION['nombre']=$login->getNombre();
            $_SESSION['id']=$login->getId();
            
            
        }
        
        echo $result;

    }else{
        echo "{\"result\":\"-1\"}";
    }

?>

