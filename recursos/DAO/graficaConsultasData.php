<?php
class graficaConsultasData{
    
    function getData($anio){
    
   require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    $dato = $conexion->query("CALL consultasPorMesEnAno(".$anio.");"); 

			while ($fila = $dato->fetch_assoc()) {

           $grafica[]=$fila;

			}
                
    return $grafica;         
    
    }
    
}


?>