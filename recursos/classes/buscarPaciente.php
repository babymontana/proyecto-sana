<?php
class busquedaPaciente{

function buscar($valor){
    require_once "../DAO/busquedaPacienteData.php";
    $DAO = new busquedaPacienteData();
    return json_encode($DAO->getData($valor));
    
}


}

?>


