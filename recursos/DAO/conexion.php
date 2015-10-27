<?php
class conexion{
public function conectar(){
$conexion = new mysqli("localhost","root","","WebApps");
$conexion->set_charset("utf8");
return $conexion;	
}
	
}
?>