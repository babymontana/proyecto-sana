<?php

$desde=$_POST['desde'];
$hasta=$_POST['hasta']; 
$cuestionario=$_POST['cuestionario'];
$velocidad=$_POST['velocidad'];
$presion=$_POST['presion'];
$actividad=$_POST['actividad'];
$peso=$_POST['peso'];

require_once "../classes/metricas.php";
$class = new metricas();
echo $class->getMetricas($desde,$hasta,$cuestionario,$velocidad,$presion,$actividad,$peso);

?>