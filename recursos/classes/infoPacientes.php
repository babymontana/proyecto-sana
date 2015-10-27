<?php
class infoPacientes{
    
    function getInfo($matricula){
        require_once "../DAO/infoPacientesData.php";
        $DAO = new infoPacientesData();
        $info = $DAO->getData($matricula);
        return json_encode($info);
    }
}

?>