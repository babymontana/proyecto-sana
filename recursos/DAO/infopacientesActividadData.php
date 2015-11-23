<?php
class infopacientesActividadData{
    
    function getInfo($id){
         require_once "conexion.php";
        $conect = new conexion();
        $conexion = $conect->conectar();
        $dato = $conexion->query("CALL S_8variacionAF('".$id."');"); 
        	while ($fila = $dato->fetch_assoc()) {

           $info[]=$fila;

			}
        return $info;         
    }
    
}

?>