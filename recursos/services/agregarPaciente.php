<?php
session_start();
$valido = $_SESSION['valido'];
if($valido == "1"){
    
    $nombre =$_POST['nombre'];
    $apellido_P =$_POST['apellido_P'];
    $apellido_M =$_POST['apellido_M'];
    $sexo =$_POST['sexo'];
    $fecha_nacimiento =$_POST['fecha_nacimiento'];
    $email =$_POST['email'];
    $delegacion =$_POST['delegacion'];
    $telefono =$_POST['telefono'];
    $celular =$_POST['celular'];
    $FK_escolaridad =$_POST['FK_escolaridad'];
    $FK_situaciones =$_POST['FK_situaciones'];
    
    $obligados = array($nombre,$apellido_P,$apellido_M,$fecha_nacimiento,$sexo,$delegacion,$FK_escolaridad,$FK_situaciones);
    $opcionales = array($email,$telefono,$celular);
    
        
        require_once "../classes/agregarPaciente.php";
        $clase = new agregarPaciente();
        echo $clase->insertData($obligados,$opcionales);
        
    
      
       
        
    

}
?>