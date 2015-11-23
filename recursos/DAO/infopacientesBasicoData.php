<?php
class infopacientesBasicoData{
    
    function getInfo($id){
         require_once "conexion.php";
        $conect = new conexion();
        $conexion = $conect->conectar();
        $dato = $conexion->query("CALL S_1informacionPaciente('".$id."');"); 
        $info=$dato->fetch_assoc();
        return $info;         
    }
    
}

?>