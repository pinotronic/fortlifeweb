<?php
require("persistencia/registroSeguimientoDAO.php");
class RegistroSeguimiento{
    public $idSeguimiento;
    public $fechaInteraccion;
    public $idAgente;
    public $registro;
    public $idAdministrador;

    function getIdSeguimiento(){
        return $this -> idSeguimiento;
    }
    function setIdSeguimiento($pidSeguimiento){
        $this -> idSeguimiento = $pidSeguimiento;
    }
    function getFechaInteraccion(){
        return $this -> fechaInteraccion;
    }
    function setFechaInteraccion($pfechaInteraccion){
        $this -> fechaInteraccion = $pfechaInteraccion;
    }
    function getIdAgente(){
        return $this -> idAgente;
    }
    function setIdAgente($pidAgente){
        $this -> idAgente = $pidAgente;
    }
    function getRegistro(){
        return $this -> registro;
    }
    function setRegistro($pregistro){
        $this -> registro = $pregistro;
    }
    function getIdAdministrador(){
        return $this -> idAdministrador;
    }
    function setIdAdministrador($pidAdministrador){
        $this -> idAdministrador = $pidAdministrador;
    }

    public function __construct($pidSeguimiento, $pfechaInteraccion, $pidAgente, $pregistro, $pidAdministrador){
        $this -> idSeguimiento = $pidSeguimiento;
        $this -> fechaInteraccion = $pfechaInteraccion;
        $this -> idAgente = $pidAgente;
        $this -> registro = $pregistro;
        $this -> idAdministrador = $pidAdministrador;
        $this -> registroSeguimientoDAO = new RegistroSeguimientoDAO($this -> idSeguimiento, $this -> fechaInteraccion, $this -> idAgente, $this -> registro, $this -> idAdministrador);
        $this -> conexion = new Conexion();
    }
    public function insertar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> registroSeguimientoDAO -> insertar());
        $this -> conexion -> close();
    }
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> registroSeguimientoDAO -> consultarTodo());
        $resultado = $this -> conexion -> extraer();
        if(!empty($resultado)){ 
            $this -> idSeguimiento = $resultado[0];
            $this -> fechaInteraccion = $resultado[1];
            $this -> idAgente = $resultado[2];
            $this -> registro = $resultado[3];
            $this -> idAdministrador = $resultado[4];
        }
    }
    function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> registroSeguimientoDAO -> consultarTodo());
        $seguimiento = array();
        while ($resultado = $this -> conexion -> extraer()){
            array_push($seguimiento, new RegistroSeguimiento($resultado[0],
             $resultado[1], 
             $resultado[2],
             $resultado[3],
             $resultado[4]));
        }
        $this -> conexion -> close();
        return $seguimiento;
    }
}
?>