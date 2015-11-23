<?php
$valor = $_POST['valor'];
session_start();
$valido = $_SESSION['valido'];
if($valido == "1"){
require_once "../classes/buscarPaciente.php";
$clase = new busquedaPaciente();
echo $clase->buscar($valor);
}

?>