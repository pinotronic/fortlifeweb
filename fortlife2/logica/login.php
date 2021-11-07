<?php
require("persistencia/loginDAO.php");

class Login{
    public $idPersona;
    public $correo;
    public $clave;
    public $idAgente;
    public $idAdministrador;
    public $status;

    function setIdPersona($pIdPersona){
        $this->idPersona = $pIdPersona; 
    }
    function getIdPersona(){
        return $this->idPersona;
    }
    function setCorreo($pCorreo){
        $this->correo = $pCorreo; 
    }
    function getCorreo(){
        return $this->correo;
    }
    function setClave($pClave){
        $this->clave = $pClave; 
    }
    function getClave(){
        return $this->clave;
    }
    function setIdAgente($pIdAgente){
        $this->idAgente = $pIdAgente; 
    }
    function getIdAgente(){
        return $this->idAgente;
    }
     function setStatus($pStatus){
        $this->status = $pStatus; 
    }
    function getStatus(){
        return $this->status;
    }

    public function __construct($pIdPersona="", $pCorreo="", $pClave="", $pIdAgente="", $pIdAdministrador="", $pStatus=""){
        $this->idPersona = $pIdPersona;
        $this->correo = $pCorreo;
        $this->clave = $pClave;
        $this->idAgente = $pIdAgente;
        $this->idAdministrador = $pIdAdministrador;
        $this->status = $pStatus;
        $this -> loginDAO = new LoginDAO($this -> idPersona, $this -> correo, $this -> clave, $this -> idAgente, $this -> idAdministrador, $this -> status);
        $this -> conexion = new Conexion();
    }
    
    function autenticar($correo, $clave){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> loginDAO -> autenticar($correo,$clave));
        if($this -> conexion -> numFilas()==1){
            $resultado = $this -> conexion -> extraer();
            var_dump($resultado);
            $this -> idPersona=$resultado[0];
            $this -> correo=$resultado[1];
            $this -> clave=$resultado[2];
            $this -> idAgente=$resultado[3];
            $this -> idAdministrador=$resultado[4];
            $this -> status=$resultado[5];
            $this -> conexion -> close();
            return true;
        }else{
            $this -> conexion -> close();
            return false;
        }
    }
}

?>