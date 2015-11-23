<?php
class busquedaPacienteData{
    
    function getData($valor){
        require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    $dato = $conexion->query("SELECT CONCAT(  `clave_paciente` ,  '-',  `nombre` ,  ' ',  `apellido_P` ,  ' ',  `apellido_M` ) AS label, `clave_paciente` AS value, `FK_escolaridad` ,   `FK_situaciones` ,  `nombre` ,  `apellido_P` ,  `apellido_M` ,  `delegacion` , `email` ,  `telefono` ,  `celular` , `PK_paciente` FROM  `Pacientes` WHERE `clave_paciente`='%".$value."%' OR `nombre` like '%".$value."%' OR `apellido_P` like '%".$value."%' OR  `apellido_M` like '%".$value."%' "); 
			while ($fila = $dato->fetch_assoc()) {
                $info[]=$fila;
			}
    return $info;   
        
    }
    
    
}

?>