<?php
require("persistencia/AgenteDAO.php");
//require("persistencia/conexion.php");

class Agente{
    private $idAgente;
    private $idAdministrador;
    private $fechaAlta;
    private $fechaEntrevistaInicial;    
    private $fechaEntrevistaSeleccion;
    private $fechaEntrevistaDirector;
    private $fechaEntrevistaCarrera;
    private $plaza; 
    private $claveTemporal;
    private $fechaClaveTemporal;
    private $clavePermanente;
    private $fechaClavePermanente;
    private $cedula;
    private $fechaVigenciaCedula;
    private $polizaRC;
    private $fechaVigenciaPolizaRC;
    private $fechaEscuelaComercial;
    public $IdAdministrador;

    function setFechaAlta($pFechaAlta){
        $this->fechaAlta = $pFechaAlta;
    }
    function getFechaAlta(){
        return $this->fechaAlta;
    }
    function setFechaEntrevistaInicial($pFechaEntrevistaInicial){
        $this->fechaEntrevistaInicial = $pFechaEntrevistaInicial;
    }
    function getFechaEntrevistaInicial(){
        return $this->fechaEntrevistaInicial;
    }
    function setFechaEntrevistaSeleccion($pFfechaEntrevistaSeleccion){
        $this->fechaEntrevistaSeleccion = $pFfechaEntrevistaSeleccion;
    }
    function getFechaEntrevistaSeleccion(){
        return $this->fechaEntrevistaSeleccion;
    }
    function setFechaEntrevistaDirector($pFechaEntrevistaDirector){
        $this->fechaEntrevistaDirector = $pFechaEntrevistaDirector;
    }
    function getFechaEntrevistaDirector(){
        return $this->fechaEntrevistaDirector;
    }
    function setFechaEntrevistaCarrera($pFechaEntrevistaCarrera){
        $this->fechaEntrevistaCarrera = $pFechaEntrevistaCarrera;
    }
    function getFechaEntrevistaCarrera(){
        return $this->fechaEntrevistaCarrera;
    }
    function setPlaza($pPlaza){
        $this->plaza = $pPlaza;
    }
    function getPlaza(){
        return $this->plaza;
    }
    function setClaveTemporal($pClaveTemporal){
        $this->claveTemporal = $pClaveTemporal;
    }
    function getClaveTemporal(){
        return $this->claveTemporal;
    }
    function setFechaClaveTemporal($pFechaClaveTemporal){
        $this->fechaClaveTemporal = $pFechaClaveTemporal;
    }
    function getFechaClaveTemporal(){
        return $this->fechaClaveTemporal;
    }
    function setClavePermanente($pClavePermanente){
        $this->clavePermanente = $pClavePermanente;
    }
    function getClavePermanente(){
        return $this->clavePermanente;
    }
    function setFechaClavePermanente($pFechaClavePermanente){
        $this->fechaClavePermanente = $pFechaClavePermanente;
    }
    function getFechaClavePermanente(){
        return $this->fechaClavePermanente;
    }
    function setFechaEscuelaCedula($pFechaEscuelaCedula){
        $this->fechaEscuelaCedula = $pFechaEscuelaCedula;
    }
    function getFechaEscuelaCedula(){
        return $this->fechaEscuelaCedula;
    }
    function setFechaExamen($pFechaExamen){
        $this->fechaExamen = $pFechaExamen;
    }
    function getFechaExamen(){
        return $this->fechaExamen;
    }
    function setCedula($pCedula){
        $this->cedula = $pCedula;
    }
    function getCedula(){
        return $this->cedula;
    }
    function setFechaVigenciaCedula($pFechaVigenciaCedula){
        $this->fechaVigenciaCedula = $pFechaVigenciaCedula;
    }
    function getFechaVigenciaCedula(){
        return $this->fechaVigenciaCedula;
    }
    function setPolizaRC($pPolizaRC){
        $this->polizaRC = $pPolizaRC;
    }
    function getPolizaRC(){
        return $this->polizaRC;
    }
    function setFechaVigenciaPolizaRC($pFechaVigenciaPolizaRC){
        $this->fechaVigenciaPolizaRC = $pFechaVigenciaPolizaRC;
    }
    function getFechaVigenciaPolizaRC(){
        return $this->fechaVigenciaPolizaRC;
    }
    function setFechaEscuelaComercial($pFechaEscuelaComercial){
        $this->fechaEscuelaComercial = $pFechaEscuelaComercial;
    }
    function getFechaEscuelaComercial(){
        return $this->fechaEscuelaComercial;
    }
  
    function setIdAdministrador($pIdAdministrador){
        $this->idAdministrador = $pIdAdministrador;
    }
    function getIdAdministrador(){
        return $this->idAdministrador;
    }

    function setIdAgente($pIdAgente){
        $this->idAgente = $pIdAgente;
    }
    function getIdAgente(){
        return $this->idAgente;
    }
    public function __construct($pIdAgente ="",$pIdAdministrador="", $pFechaAlta="", $pFechaEntrevistaInicial="", $pFechaEntrevistaSeleccion="", $pFechaEntrevistaDirector="", $pFechaEntrevistaCarrera="", $pPlaza="", $pClaveTemporal="", $pFechaClaveTemporal="", $pClavePermanente="", $pFechaClavePermanente="", $pFechaEscuelaCedula="", $pFechaExamen="",$pCedula="",  $pFechaVigenciaCedula="", $pPolizaRC="", $pFechaVigenciaPolizaRC="", $pFechaEscuelaComercial=""){
        $this -> idAgente = $pIdAgente;
        $this -> idAdministrador = $pIdAdministrador;
        $this->fechaAlta = $pFechaAlta;
        $this->fechaEntrevistaInicial = $pFechaEntrevistaInicial;
        $this->fechaEntrevistaSeleccion = $pFechaEntrevistaSeleccion;
        $this->fechaEntrevistaDirector = $pFechaEntrevistaDirector;
        $this->fechaEntrevistaCarrera = $pFechaEntrevistaCarrera;
        $this->plaza = $pPlaza;
        $this->claveTemporal = $pClaveTemporal;
        $this->fechaClaveTemporal = $pFechaClaveTemporal;
        $this->clavePermanente = $pClavePermanente;
        $this->fechaClavePermanente = $pFechaClavePermanente;
        $this -> fechaEscuelaCedula = $pFechaEscuelaCedula;
        $this -> fechaExamen = $pFechaExamen;
        $this->cedula = $pCedula;
        $this->fechaVigenciaCedula = $pFechaVigenciaCedula;
        $this->polizaRC = $pPolizaRC;
        $this->fechaVigenciaPolizaRC = $pFechaVigenciaPolizaRC;
        $this->fechaEscuelaComercial = $pFechaEscuelaComercial;
        $this -> agenteDao = new AgenteDao($this -> idAgente, $this ->idAdministrador, $this ->fechaAlta, $this ->fechaEntrevistaInicial, $this ->fechaEntrevistaSeleccion, $this ->fechaEntrevistaDirector, $this ->fechaEntrevistaCarrera, $this ->plaza, $this ->claveTemporal, $this ->fechaClaveTemporal, $this ->clavePermanente, $this ->fechaClavePermanente, $this ->fechaEscuelaCedula, $this ->fechaExamen, $this ->cedula, $this ->fechaVigenciaCedula, $this ->polizaRC, $this ->fechaVigenciaPolizaRC, $this ->fechaEscuelaComercial);
        var_dump($this -> agenteDao);
        $this -> conexion2 = new conexion();
    }
    public function insertar(){
        $this -> conexion2 -> abrir();
        $this -> conexion2 -> ejecutar($this -> agenteDao -> insertar());
        $this -> conexion2 -> close();
    }
    function actualizar(){
        $this -> conexion2 -> abrir();
        $this -> conexion2 -> ejecutar($this -> agenteDao -> actualizar());
        $this -> conexion2 -> close();
    }

    function consultar(){
        $this -> conexion2 -> abrir();
        $this -> conexion2 -> ejecutar($this -> agenteDao -> consultar());
        $resultado = $this -> conexion2 -> extraer();
        $this -> conexion2 -> close();
        $this -> idAgente = $resultado[0];
        $this -> idAdministrador = $resultado[1];
        $this -> fechaAlta = $resultado[2];
        $this -> fechaEntrevistaInicial = $resultado[3];
        $this -> fechaEntrevistaSeleccion = $resultado[4];
        $this -> fechaEntrevistaDirector = $resultado[5];
        $this -> fechaEntrevistaCarrera = $resultado[6];
        $this -> plaza = $resultado[7];
        $this -> claveTemporal = $resultado[8];
        $this -> fechaClaveTemporal = $resultado[9];
        $this -> clavePermanente = $resultado[10];
        $this -> fechaClavePermanente = $resultado[11];
        $this -> fechaEscuelaCedula= $resultado[12];
        $this -> fechaExamen = $resultado[13];
        $this -> cedula = $resultado[14];
        $this -> fechaVigenciaCedula = $resultado[15];
        $this -> polizaRC = $resultado[16];
        $this -> fechaVigenciaPolizaRC = $resultado[17];
        $this -> fechaEscuelaComercial = $resultado[18];
    }
    function consultarTodos(){
        $this -> conexion2 -> abrir();
        $this -> conexion2 -> ejecutar($this -> agenteDao -> consultarTodos());
        $administrador = array();
        while ($resultado = $this -> conexion2 -> extraer()){
            array_push($administrador, new Agente($resultado[0], $resultado[1], $resultado[2], $resultado[3], $resultado[4], $resultado[5], $resultado[6], $resultado[7], $resultado[8], $resultado[9], $resultado[10], $resultado[11], $resultado[12], $resultado[13], $resultado[14], $resultado[15], $resultado[16], $resultado[17], $resultado[18], $resultado[19]));
        }
        $this -> conexion2 -> close();
        return $resultado;
    }
function eliminar(){
        $this -> conexion2 -> abrir();
        $this -> conexion2 -> ejecutar($this -> agenteDao -> eliminar());
        $this -> conexion2 -> close();
    }
}
?>