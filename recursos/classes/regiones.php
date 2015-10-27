<?php
class regiones{
    
    function getRegiones(){
        require_once "../DAO/regionesData.php";
        $DAO= new regionesData();
        $datos=$DAO->getData();
        $json =json_encode($datos);
        return $json;
    }
}

?>