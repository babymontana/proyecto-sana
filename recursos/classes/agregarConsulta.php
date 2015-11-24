<?php
class agregarConsulta{
    
    function insertData($datos){
        
          $flag = true;
        for ($i=0; $i<sizeof($datos);$i++){
               echo $datos[$i]."==>";
                if(!isset($datos[$i])){
                $flag = false;
            }
        }
        
        if($flag==true){
           
            require_once "../DAO/agregarConsultaData.php";
            $DAO = new agregarConsultaData();
            $value = $DAO->insertarData($datos);
            
        }else{
            $value = -1;
        }
        
        return $value;
    }
}

?>