<?php
$id = $_POST['id'];
require_once "../classes/infopacientes.php";
$class = new infopacientes();
echo $class->getInfo($id);

?>