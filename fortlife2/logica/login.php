<?php
require("persistencia/loginDAO.php");

class Login{
    public $idUsuario;
    public $correo;
    public $clave;
    public $idAgente;
    public $idAdministrador;
    public $status;

    function setIdUsuario($pidUsuario){
        $this->idUsuario = $pidUsuario; 
    }
    function getIdUsuario(){
        return $this->idUsuario;
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
    
    function setIdAdministrador($pIdAdministrador){
        $this->idAdministrador = $pIdAdministrador; 
    }
    function getIdAdministrador(){
        return $this->idAdministrador;
    }
    function setStatus($pStatus){
        $this->status = $pStatus; 
    }
    function getStatus(){
        return $this->status;
    }

    public function __construct($pidUsuario="", $pCorreo="", $pClave="", $pIdAgente="", $pIdAdministrador="", $pStatus=""){
        $this->idUsuario = $pidUsuario;
        $this->correo = $pCorreo;
        $this->clave = $pClave;
        $this->idAgente = $pIdAgente;
        $this->idAdministrador = $pIdAdministrador;
        $this->status = $pStatus;
        $this -> loginDAO = new LoginDAO($this -> idUsuario, $this -> correo, $this -> clave, $this -> idAgente, $this -> idAdministrador, $this -> status);
        $this -> conexion = new Conexion();
    }
    
    function autenticar($correo, $clave){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> loginDAO -> autenticar($correo,$clave));
        if($this -> conexion -> numFilas()==1){
            $resultado = $this -> conexion -> extraer();
            $this -> idUsuario=$resultado[0];
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
    function verificarPermiso($idAdministrador){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> loginDAO -> buscarIdAdministrador($idAdministrador));
        if($this -> conexion -> numFilas()==1){
            $resultado = $this -> conexion -> extraer();
            $this -> idAdministrador=$resultado[0];
            $this -> status=$resultado[1];
            $this -> conexion -> close();
            return true;
        }else{
            $this -> conexion -> close();
            return false;
        }
    }
    public function insertar(){
        var_dump($this -> idUsuario);
        var_dump($this -> correo);
        var_dump($this -> clave);
        var_dump($this -> idAgente);
        var_dump($this -> idAdministrador);
        var_dump($this -> status);
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> loginDAO -> insertar());
        $this -> conexion -> close();
    }
    function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> loginDAO -> consultarTodo());
        $idUsuario = array();
        while ($resultado = $this -> conexion -> extraer()){
            if(!empty($resultado)){
                array_push($idUsuario, new Login($resultado[0],
                $resultado[1],
                $resultado[2],
                $resultado[3],
                $resultado[4],
                $resultado[5]));
        }else{
            echo "paso3";
        }
        }
        $this -> conexion -> close();
        return $idUsuario;
    }
    
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> loginDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        if(!empty($resultado)){        
            $this -> idUsuario = $resultado[0];
            $this -> correo = $resultado[1];
            $this -> clave = $resultado[2];
            $this -> idAgente = $resultado[3];
            $this -> idAdministrador = $resultado[4];
            $this -> status = $resultado[5];
            $this -> conexion -> close();
        }else{
        $this -> conexion -> close();
        return false;
        }
    }
    function actualizar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> loginDAO -> actualizar());
        $this -> conexion -> close();
    }
}
?>