<?php
session_start();
$valido = $_SESSION['valido'];
if($valido == "1"){

$sexo=$_POST['sexo'];
require_once"../classes/generoEdad.php";
$clase = new generoEdad();
echo $clase->getEdades($sexo);

}

?>