<?php
class generoEdad{
    
    
    function getEdades($sexo){
    
      require_once "../DAO/generoEdadData.php";
      $DAO = new generoEdadData();
      return json_encode($DAO->getData($sexo));
        
    }
}

?>