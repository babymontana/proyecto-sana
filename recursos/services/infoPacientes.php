<?php
session_start();
$valido = $_SESSION['valido'];
if($valido == "1"){
$matricula=$_POST['matricula'];    
require_once "../classes/infoPacientes.php";
$class= new infoPacientes();
echo $class->getInfo($matricula);

}

?>