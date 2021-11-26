<?php
require("persistencia/veinticincoPuntosDAO.php");
class VeintiCincoPuntos{
    public $idVendedor;
    public $nombre;
    public $fecha;
    public $referidosObtenidos;
    public $referidosContactados;
    public $llamadasRealizadas;
    public $citasObtenidas;
    public $entInicialesAgendadas;
    public $entrevistaCuestionario;
    public $cierresAgendados;
    public $cierresRealizados;
    public $solicitudes;
    public $polizasPagadas;

    function getIdVendedor(){
        return $this->idVendedor;
    }
    function setIdVendedor($idVendedor){
        $this->idVendedor = $idVendedor;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre = $nombre;
    }
    function getFecha(){
        return $this->fecha;
    }
    function setFecha($fecha){
        $this->fecha = $fecha;
    }
    function getReferidosObtenidos(){
        return $this->referidosObtenidos;
    }
    function setReferidosObtenidos($referidosObtenidos){
        $this->referidosObtenidos = $referidosObtenidos;
    }
    function getReferidosContactados(){
        return $this->referidosContactados;
    }
    function setReferidosContactados($referidosContactados){
        $this->referidosContactados = $referidosContactados;
    }
    function getLlamadasRealizadas(){
        return $this->llamadasRealizadas;
    }
    function setLlamadasRealizadas($llamadasRealizadas){
        $this->llamadasRealizadas = $llamadasRealizadas;
    }
    function getCitasObtenidas(){
        return $this->citasObtenidas;
    }
    function setCitasObtenidas($citasObtenidas){
        $this->citasObtenidas = $citasObtenidas;
    }
    function getEntInicialesAgendadas(){
        return $this->entInicialesAgendadas;
    }
    function setEntInicialesAgendadas($entInicialesAgendadas){
        $this->entInicialesAgendadas = $entInicialesAgendadas;
    }
    function getEntrevistaCuestionario(){
        return $this->entrevistaCuestionario;
    }
    function setEntrevistaCuestionario($entrevistaCuestionario){
        $this->entrevistaCuestionario = $entrevistaCuestionario;
    }
    function getCierresAgendados(){
        return $this->cierresAgendados;
    }
    function setCierresAgendados($cierresAgendados){
        $this->cierresAgendados = $cierresAgendados;
    }
    function getCierresRealizados(){
        return $this->cierresRealizados;
    }
    function setCierresRealizados($cierresRealizados){
        $this->cierresRealizados = $cierresRealizados;
    }
    function getSolicitudes(){
        return $this->solicitudes;
    }
    function setSolicitudes($solicitudes){
        $this->solicitudes = $solicitudes;
    }
    function getPolizasPagadas(){
        return $this->polizasPagadas;
    }
    function setPolizasPagadas($polizasPagadas){
        $this->polizasPagadas = $polizasPagadas;
    }
    public function __construct($idVendedor="", $nombre="", $fecha="", $referidosObtenidos="", $referidosContactados="", $llamadasRealizadas="", $citasObtenidas="", $entInicialesAgendadas="", $entrevistaCuestionario="", $cierresAgendados="", $cierresRealizados="", $solicitudes="", $polizasPagadas=""){
        $this->idVendedor = $idVendedor;
        $this->nombre = $nombre;
        $this->fecha = $fecha;
        $this->referidosObtenidos = $referidosObtenidos;
        $this->referidosContactados = $referidosContactados;
        $this->llamadasRealizadas = $llamadasRealizadas;
        $this->citasObtenidas = $citasObtenidas;
        $this->entInicialesAgendadas = $entInicialesAgendadas;
        $this->entrevistaCuestionario = $entrevistaCuestionario;
        $this->cierresAgendados = $cierresAgendados;
        $this->cierresRealizados = $cierresRealizados;
        $this->solicitudes = $solicitudes;
        $this->polizasPagadas = $polizasPagadas;
        $this ->veinticincoPuntosDAO= new VeinticincoPuntosDAO($this -> idVendedor, $this -> nombre, $this -> fecha, $this -> referidosObtenidos, $this -> referidosContactados, $this -> llamadasRealizadas, $this -> citasObtenidas, $this -> entInicialesAgendadas, $this -> entrevistaCuestionario, $this -> cierresAgendados, $this -> cierresRealizados, $this -> solicitudes, $this -> polizasPagadas);
        $this ->conexion = new Conexion();
    }
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> veinticincoPuntosDAO -> consultar());
        $administrador = array();
        while ($resultado = $this -> conexion -> extraer()){
            array_push($administrador, new VeintiCincoPuntos($resultado[0],
             $resultado[1], 
             $resultado[2],
             $resultado[3],
             $resultado[4],
             $resultado[5],
             $resultado[6],
             $resultado[7],
             $resultado[8],
             $resultado[9],
             $resultado[10],
             $resultado[11],
             $resultado[12]));
        }
        $this -> conexion -> close();
        return $administrador;
    }

}