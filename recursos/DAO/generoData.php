<?php
class generoData{
    
    function getData(){
        
    require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    $dato = $conexion->query("SELECT CASE WHEN F.sexo LIKE 'H' THEN 'HOMBRE' ELSE 'MUJER' END AS Genero, F.Total FROM (SELECT sexo, COUNT(sexo) as Total FROM Pacientes GROUP BY sexo ORDER BY Total DESC) AS F"); 

			while ($fila = $dato->fetch_assoc()) {

           $genero[]=$fila;

			}
                
    return $genero;         
        
    }
}

?>