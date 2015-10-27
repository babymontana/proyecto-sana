<?php
class graficaConsultas{
    
    function getConsultas($anio1,$anio2){
        
        require_once "../DAO/graficaConsultasData.php";
        $DAO = new graficaConsultasData();
        
        $data1=$DAO->getData($anio1);
        $data2=$DAO->getData($anio2);
         $json = "[".json_encode($data1).",".json_encode($data2)."]";
        return $json;
        
    }
}

?>