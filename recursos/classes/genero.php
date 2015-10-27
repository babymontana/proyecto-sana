<?php
class genero{
    
    
    function getGenero(){
        require_once "../DAO/generoData.php";
        $DAO = new generoData();
        $generoResult = $DAO->getData();
        return json_encode($generoResult);
        
    }
}

?>