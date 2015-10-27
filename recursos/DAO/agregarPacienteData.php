<?php
class agregarPacienteData{

     function insertarData($datos,$fecha){
         
        $nombre =$datos[0];
        $apellido_P =$datos[1];
        $apellido_M =$datos[2];
        $fecha_nacimiento =$datos[3];
        $sexo =$datos[4];
        $delegacion =$datos[5];
        $FK_escolaridad =$datos[6];
        $FK_situaciones =$datos[7];
        $email =$datos[8];
        $telefono =$datos[9];
        $celular =$datos[10];
        
        
    require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    $conexion->multi_query("CALL insertarPaciente(".$FK_escolaridad.",".$FK_situaciones.",'".$nombre."','".$apellido_P."','".$apellido_M."','".$fecha_nacimiento."','".$sexo."','".$delegacion."','".$email."','".$telefono."','".$celular."','".$fecha."',@out_value); SELECT @out_value AS matricula;"); 
	
	$conexion->next_result(); 
	$rs=$conexion->store_result();
	$respuesta= $rs->fetch_object()->matricula;
    $rs->free();
	
        return $respuesta;
     }
    
}

?>