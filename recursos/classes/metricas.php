<?php
class metricas{
    
    function getMetricas($desde,$hasta,$cuestionario,$velocidad,$presion,$actividad,$peso){
         require_once "../DAO/metricasData.php";
         $DAO = new metricasData();
         $metricas = $DAO->getMetricasData();
       
       if( !empty($desde)){
           
           $metricas = $this->fechaDesde($metricas,$desde);
       }
       
       if( !empty($hasta)){
           
           $metricas = $this->fechaHasta($metricas,$hasta);
       }
       
        if( $cuestionario!="0"){
           
           $metricas = $this->cuestionarioFiltro($metricas,$cuestionario);
       }
       
      $metricas = $this->velocidadFiltro($metricas,$velocidad);
      $metricas = $this->presionFiltro($metricas,$presion);
      $metricas = $this->actividadFiltro($metricas,$actividad);
      $metricas = $this->pesoFiltro($metricas,$peso);
       
        return json_encode($metricas);
    }
    
    function fechaDesde($metricas,$desde){
        $j=0;
        for($i=0;$i<sizeof($metricas);$i++){
            if (strtotime($metricas[$i]['FECHA']) >strtotime($desde)){
                $newMetricas[$j]= $metricas[$i];
                $j++;
            }
        }
        
        return $newMetricas;
        
    }
    
    function fechaHasta($metricas,$desde){
        $j=0;
        for($i=0;$i<sizeof($metricas);$i++){
            if (strtotime($metricas[$i]['FECHA']) < strtotime($desde)){
                $newMetricas[$j]= $metricas[$i];
                $j++;
            }
        }
        
        return $newMetricas;
        
    }
    
     function cuestionarioFiltro($metricas,$cuestionario){
          $j=0;
        for($i=0;$i<sizeof($metricas);$i++){
            if ($metricas[$i]['C']==$cuestionario){
                $newMetricas[$j]= $metricas[$i];
                $j++;
            }
        }
        
        return $newMetricas;
     }
     
     
      function velocidadFiltro($metricas,$velocidad){
           $j=0;
        for($i=0;$i<sizeof($metricas);$i++){
            if ($metricas[$i]['V']>=($velocidad[0]/10) && $metricas[$i]['V']<=($velocidad[1]/10)){
                $newMetricas[$j]= $metricas[$i];
                $j++;
            }
        }
         return $newMetricas; 
      }
      
      function presionFiltro($metricas,$presion){
           $j=0;
        for($i=0;$i<sizeof($metricas);$i++){
            if ($metricas[$i]['P']>=($presion[0]/1) && $metricas[$i]['P']<=($presion[1]/1)){
                $newMetricas[$j]= $metricas[$i];
                $j++;
            }
        }
         return $newMetricas; 
      }
      
      function actividadFiltro($metricas,$actividad){
           $j=0;
        for($i=0;$i<sizeof($metricas);$i++){
            if ($metricas[$i]['AF']>=($actividad[0]/1) && $metricas[$i]['AF']<=($actividad[1]/1)){
                $newMetricas[$j]= $metricas[$i];
                $j++;
            }
        }
         return $newMetricas; 
      }
      
      function pesoFiltro($metricas,$peso){
           $j=0;
        for($i=0;$i<sizeof($metricas);$i++){
            if ($metricas[$i]['PE']>=($peso[0]/1) && $metricas[$i]['PE']<=($peso[1]/1)){
                $newMetricas[$j]= $metricas[$i];
                $j++;
            }
        }
         return $newMetricas; 
          
      }
    
}

?>