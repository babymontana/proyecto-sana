<?php
session_start();
$valido = $_SESSION['valido'];
if($valido == "1"){
    
$anio1=$_POST['anio1'];
$anio2=$_POST['anio2'];
require_once "../classes/graficaConsultas.php";
$clase = new graficaConsultas();
echo $clase->getConsultas($anio1,$anio2);

}


?>