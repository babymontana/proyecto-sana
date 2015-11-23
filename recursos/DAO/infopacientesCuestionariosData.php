<?php
class infopacientesCuestionariosData{
    
    function getInfo($id){
         require_once "conexion.php";
        $conect = new conexion();
        $conexion = $conect->conectar();
        $dato = $conexion->query("CALL S_6variacionCuestionario('".$id."');"); 
        	while ($fila = $dato->fetch_assoc()) {

           $info[]=$fila;

			}
        return $info;         
    }
    
}

?>