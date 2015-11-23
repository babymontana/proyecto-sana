<?php
class agregarConsultaData{
    function insertarData($datos){
          
     
    $clave =$datos[0];
    $cuestionriodep =$datos[1];
    $presion =$datos[2];
    $actividadfisica=$datos[3];
    $peso =$datos[4];
    $velocidad =$datos[5];
    $clave_profesional =$datos[6];
    
    require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    $conexion->multi_query("CALL insertRecordMetricas('".$clave."','".$clave_profesional."',".$cuestionriodep.", ".$velocidad.", ".$presion.", ".$actividadfisica.",".$peso.", @out_value); SELECT @out_value AS result;"); 
	
	$conexion->next_result(); 
	$rs=$conexion->store_result();
	$respuesta= $rs->fetch_object()->result;
    $rs->free();
	
        return $respuesta;
    }
}

?>