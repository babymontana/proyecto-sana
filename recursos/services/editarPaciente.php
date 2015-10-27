<?php
session_start();
$valido = $_SESSION['valido'];
if($valido == "1"){
    $email =$_POST['email'];
    $delegacion =$_POST['delegacion'];
    $telefono =$_POST['telefono'];
    $celular =$_POST['celular'];
    $FK_escolaridad =$_POST['FK_escolaridad'];
    $FK_situaciones =$_POST['FK_situaciones'];
    $PK_paciente=$_POST['PK_paciente'];
    
     $obligados = array($PK_paciente,$delegacion,$FK_escolaridad,$FK_situaciones);
     $opcionales = array($email,$telefono,$celular);
    
        
        require_once "../classes/editarPaciente.php";
        $clase = new editarPaciente();
        echo $clase->updateData($obligados,$opcionales);
       
}

?>