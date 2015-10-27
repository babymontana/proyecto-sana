<?php
class infoPacientesData{
    
    function getData($matricula){
        
    require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    $dato = $conexion->query("SELECT * FROM Pacientes WHERE clave_paciente = '".$matricula."';"); 
			while ($fila = $dato->fetch_assoc()) {
                $info[]=$fila;
			}
    return $info;         
    }
}

?>