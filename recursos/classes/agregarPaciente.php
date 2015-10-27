<?php
class agregarPaciente{
    
    function insertData($obligados, $opcionales){
        
        $flag = true;
        for ($i=0; $i<sizeof($obligados);$i++){
        
                if(!isset($obligados[$i])){
                $flag = false;
            }
        }
        
        if($flag==true){
            $fecha = date("Y-m-d");
            $datos = array_merge($obligados,$opcionales);
            require_once "../DAO/agregarPacienteData.php";
            $DAO = new agregarPacienteData();
            $value = $DAO->insertarData($datos,$fecha);
            
        }else{
            $value = -1;
        }
        
        return $value;
    }
}

?>