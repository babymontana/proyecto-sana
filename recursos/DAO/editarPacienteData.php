<?php
class editarPacienteData{
    
    function updateData($datos){
        
        $PK_paciente=$datos[0];
        $delegacion =$datos[1];
        $FK_escolaridad =$datos[2];
        $FK_situaciones =$datos[3];
        $email =$datos[4];
        $telefono =$datos[5];
        $celular =$datos[6];
        
    require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    $update = $conexion->query("UPDATE `Pacientes` SET `delegacion`='".$delegacion."',`FK_escolaridad`='".$FK_escolaridad."',`FK_situaciones`='".$FK_situaciones."',`email`='".$email."',`telefono`='".$telefono."',`celular`='".$celular."' WHERE `PK_paciente`='".$PK_paciente."';"); 
    
     if($update==true){
         
         $respuesta = 1;
         
     }else{
         
         $respuesta = 0;
     }
			
                
    return $respuesta;         
    }
}

?>