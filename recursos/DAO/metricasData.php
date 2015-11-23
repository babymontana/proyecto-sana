<?php
class metricasData{
    
    function getMetricasData(){
        require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    $dato = $conexion->query("CALL metricas();"); 

			while ($fila = $dato->fetch_assoc()) {

           $metricas[]=$fila;

			}
                
    return $metricas;         
        
        
    }
    
}

?>