<?php
class login{
    
    private $valido;
    private $id;
    private $nombre;
    
    function logging($clave,$password){
        require_once "../DAO/loginData.php";
        $loginData = new loginData();
        $response = $loginData->data($clave, $password);
        $size = sizeof($response);
        $this->valido=$size;
        if($size==1){
        $this->id=$response[0]['clave_profesional'];
        $this->nombre=$response[0]['nombre'];
        }
        return "{\"response\":\"".$size."\",\"info\":".json_encode($response[0])."}";
    }
    
    function getValido(){
        return $this->valido;
    }
    
    function getNombre(){
        return $this->nombre;
        
    }
    
    function getId(){
        
        return $this->id;
        
    }
}
?>