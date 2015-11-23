<?php
class infopacientesPromedioData{
    
    function getInfo($id){
         require_once "conexion.php";
        $conect = new conexion();
        $conexion = $conect->conectar();
        $dato = $conexion->query("CALL S_2calculoPromedios('".$id."');"); 
        $info=$dato->fetch_assoc();
        return $info;         
    }
    
}

?>