<?php
class generoEdadData{
    
    
    function getData($sexo){
        
    
    
    switch($sexo){
        case "M":
        $condicion=" sexo like 'M' AND ";
        break;
        
        case "H":
        $condicion=" sexo like 'H' AND ";
        break;
        
    }    
    
    $query="SELECT F.Bandera AS Rango, SUM(F.Total) AS Totales FROM(SELECT CASE WHEN D.Edad>=65 AND D.Edad<70 THEN '60-69' WHEN D.Edad>=70 AND D.Edad<80 THEN '70-79'  ELSE '80-Mas' END AS Bandera, D.Total FROM (SELECT P.Edad, COUNT(P.Edad) as Total FROM(SELECT PK_paciente, nombre, TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE()) AS Edad FROM Pacientes WHERE".$condicion." TIMESTAMPDIFF(YEAR,fecha_nacimiento,CURDATE())>65) AS P GROUP BY Edad ORDER BY Edad DESC) AS D ) AS F GROUP BY F.Bandera ORDER BY F.Bandera;";
        
    require_once "conexion.php";
    $conect = new conexion();
    $conexion = $conect->conectar();
    $dato = $conexion->query($query); 

			while ($fila = $dato->fetch_assoc()) {

           $edades[]=$fila;

			}
                
    return $edades;       
                    
    }
}

?>