<?php

class regionesData{
    
    
    function getData(){
    require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    $dato = $conexion->query("SELECT delegacion AS Delegacion, COUNT(*) AS Numero FROM Pacientes GROUP BY delegacion ORDER BY delegacion ASC;"); 

			while ($fila = $dato->fetch_assoc()) {

           $region[]=$fila;

			}
           
    return $region;         
    }
}

?>