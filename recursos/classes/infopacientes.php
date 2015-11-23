<?php
class infopacientes{
    
    
    function getInfo($id){
        
      $respuesta["BASICO"] = $this->getBasico($id);
      $respuesta["PROMEDIO"] = $this->getPromedio($id);
      $respuesta["HISTORIAL"] = $this->getHistorial($id);
      $respuesta["PESO"] = $this->getPeso($id);
      $respuesta["PRESION"] = $this->getPresion($id);
      $respuesta["CUESTIONARIOS"] = $this->getCuestionarios($id);
      $respuesta["VELOCIDAD"] = $this->getVelocidad($id);
      $respuesta["ACTIVIDAD_FISICA"] = $this->getActividadFisica($id);

        return json_encode($respuesta);
    }
    
    function getBasico($id){
        require_once "../DAO/infopacientesBasicoData.php";
        $DAO = new infopacientesBasicoData();
        return $DAO->getInfo($id);
    }
    
    function getPromedio($id){
        require_once "../DAO/infopacientesPromedioData.php";
        $DAO = new infopacientesPromedioData();
        return $DAO->getInfo($id);
    }
    
    function getHistorial($id){
        require_once "../DAO/infopacientesHistorialData.php";
        $DAO = new infopacientesHistorialData();
        return $DAO->getInfo($id);
    }
    
    function getPeso($id){
        require_once "../DAO/infopacientesPesoData.php";
        $DAO = new infopacientesPesoData();
        return $DAO->getInfo($id);
    }
    
    function getPresion($id){
        require_once "../DAO/infopacientesPresionData.php";
        $DAO = new infopacientesPresionData();
        return $DAO->getInfo($id);
    }
    
    function getCuestionarios($id){
        require_once "../DAO/infopacientesCuestionariosData.php";
        $DAO = new infopacientesCuestionariosData();
        return $DAO->getInfo($id);
    }
    
    function getVelocidad($id){
        require_once "../DAO/infopacientesVelocidadData.php";
        $DAO = new infopacientesVelocidadData();
        return $DAO->getInfo($id);
    }
    
    function getActividadFisica($id){
        require_once "../DAO/infopacientesActividadData.php";
        $DAO = new infopacientesActividadData();
        return $DAO->getInfo($id);
    }
    
    
}


?>