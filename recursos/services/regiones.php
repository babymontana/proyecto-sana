<?php
session_start();
$valido = $_SESSION['valido'];
if($valido == "1"){
    
require_once "../classes/regiones.php";
$clase = new regiones();
echo $clase->getRegiones();

}

?>