<?php
class editarPaciente{
    
    function updateData($obligados, $opcionales){
        
        $flag = true;
        for ($i=0; $i<sizeof($obligados);$i++){
        
                if(!isset($obligados[$i])){
                $flag = false;
            }
        }
        
        if($flag==true){
           
            $datos = array_merge($obligados,$opcionales);
            require_once "../DAO/editarPacienteData.php";
            $DAO = new editarPacienteData();
            $value = $DAO->updateData($datos);
            
        }else{
            $value = -1;
        }
        
        return $value;
    }
}

?>