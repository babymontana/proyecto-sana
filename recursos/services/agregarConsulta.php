<?php
session_start();
$valido = $_SESSION['valido'];
if($valido == "1"){
 
    $clave =$_POST['clave'];
    $cuestionriodep =$_POST['cuestionriodep'];
    $presion =$_POST['presion'];
    $actividadfisica=$_POST['actividadfisica'];
    $peso =$_POST['peso'];
    $velocidad =$_POST['velocidad'];
    
      $datos = array($clave,$cuestionriodep,$presion,$actividadfisica, $peso,$velocidad, $_SESSION['id']);
     require_once "../classes/agregarConsulta.php";
        $clase = new agregarConsulta();
        echo $clase->insertData($datos);
       
}
?>