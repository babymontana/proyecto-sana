<?php
session_start();
$valido = $_SESSION['valido'];
if($valido == "1"){
    
require_once "../classes/genero.php";
$class= new genero();
$generoJSON = $class->getGenero();
echo $generoJSON;

}

?>