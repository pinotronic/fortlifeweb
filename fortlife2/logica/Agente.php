<?php
require("persistencia/AdministradorDAO.php");
require("persistencia/Conexion.php");

class Agente{
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
    function setidAdministrador(){
        $this->idAdministrador = $idAdministrador;
    }
    function getidAdministrador(){
        return $this->idAdministrador;
    }
    function setfechaAlta(){
        $this->fechaAlta = $fechaAlta;
    }
    function getfechaAlta(){
        return $this->fechaAlta;
    }
    function setfechaEntrevistaInicial(){
        $this->fechaEntrevistaInicial = $fechaEntrevistaInicial;
    }
    function getfechaEntrevistaInicial(){
        return $this->fechaEntrevistaInicial;
    }
    function setfechaEntrevistaSeleccion(){
        $this->fechaEntrevistaSeleccion = $fechaEntrevistaSeleccion;
    }
    function getfechaEntrevistaSeleccion(){
        return $this->fechaEntrevistaSeleccion;
    }
    function setfechaEntrevistaDirector(){
        $this->fechaEntrevistaDirector = $fechaEntrevistaDirector;
    }
    function getfechaEntrevistaDirector(){
        return $this->fechaEntrevistaDirector;
    }
    function setfechaEntrevistaCarrera(){
        $this->fechaEntrevistaCarrera = $fechaEntrevistaCarrera;
    }

    function getfechaEntrevistaCarrera(){
        return $this->fechaEntrevistaCarrera;
    }
    function setplaza(){
        $this->plaza = $plaza;
    }
    function getplaza(){
        return $this->plaza;
    }
    function setclaveTemporal(){
        $this->claveTemporal = $claveTemporal;
    }
    function getclaveTemporal(){
        return $this->claveTemporal;
    }
    function setfechaClaveTemporal(){
        $this->fechaClaveTemporal = $fechaClaveTemporal;
    }
    function getfechaClaveTemporal(){
        return $this->fechaClaveTemporal;
    }
    function setclavePermanente(){
        $this->clavePermanente = $clavePermanente;
    }
    function getclavePermanente(){
        return $this->clavePermanente;
    }
    function setfechaClavePermanente(){
        $this->fechaClavePermanente = $fechaClavePermanente;
    }
    function getfechaClavePermanente(){
        return $this->fechaClavePermanente;
    }
    function setcedula(){
        $this->cedula = $cedula;
    }
    function getcedula(){
        return $this->cedula;
    }
    function setfechaVigenciaCedula(){
        $this->fechaVigenciaCedula = $fechaVigenciaCedula;
    }
    function getfechaVigenciaCedula(){
        return $this->fechaVigenciaCedula;
    }
    function setpolizaRC(){
        $this->polizaRC = $polizaRC;
    }
    function getpolizaRC(){
        return $this->polizaRC;
    }
    function setfechaVigenciaPolizaRC(){
        $this->fechaVigenciaPolizaRC = $fechaVigenciaPolizaRC;
    }
    function getfechaVigenciaPolizaRC(){
        return $this->fechaVigenciaPolizaRC;
    }
    function setfechaEscuelaComercial(){
        $this->fechaEscuelaComercial = $fechaEscuelaComercial;
    }
    function getfechaEscuelaComercial(){
        return $this->fechaEscuelaComercial;
    }
    public function __construct($idAdministrador="", $fechaAlta="", $fechaEntrevistaInicial="", $fechaEntrevistaSeleccion="", $fechaEntrevistaDirector="", $fechaEntrevistaCarrera="", $plaza="", $claveTemporal="", $fechaClaveTemporal="", $clavePermanente="", $fechaClavePermanente="", $cedula="", $fechaVigenciaCedula="", $polizaRC="", $fechaVigenciaPolizaRC="", $fechaEscuelaComercial=""){
        $this->idAdministrador = $idAdministrador;
        $this->fechaAlta = $fechaAlta;
        $this->fechaEntrevistaInicial = $fechaEntrevistaInicial;
        $this->fechaEntrevistaSeleccion = $fechaEntrevistaSeleccion;
        $this->fechaEntrevistaDirector = $fechaEntrevistaDirector;
        $this->fechaEntrevistaCarrera = $fechaEntrevistaCarrera;
        $this->plaza = $plaza;
        $this->claveTemporal = $claveTemporal;
        $this->fechaClaveTemporal = $fechaClaveTemporal;
        $this->clavePermanente = $clavePermanente;
        $this->fechaClavePermanente = $fechaClavePermanente;
        $this->cedula = $cedula;
        $this->fechaVigenciaCedula = $fechaVigenciaCedula;
        $this->polizaRC = $polizaRC;
        $this->fechaVigenciaPolizaRC = $fechaVigenciaPolizaRC;
        $this->fechaEscuelaComercial = $fechaEscuelaComercial;
        $this -> agenteDao = new AgenteDao($this ->idAdministrador, $this ->fechaAlta, $this ->fechaEntrevistaInicial, $this ->fechaEntrevistaSeleccion, $this ->fechaEntrevistaDirector, $this ->fechaEntrevistaCarrera, $this ->plaza, $this ->claveTemporal, $this ->fechaClaveTemporal, $this ->clavePermanente, $this ->fechaClavePermanente, $this ->cedula, $this ->fechaVigenciaCedula, $this ->polizaRC, $this ->fechaVigenciaPolizaRC, $this ->fechaEscuelaComercial);
        $this -> conexion = new Conexion();
    }
    public function insertar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDao -> insertar());
        $this -> conexion -> close();
    }
    function actualizar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDao -> actualizar());
        $this -> conexion -> close();
    }
    function autenticar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDao -> autenticar());
        $this -> conexion -> close();
        if($this -> conexion -> numFilas() == 1){
            $resultado = $this -> conexion -> extraer();
            $this -> idAdministrador = $resultado[0];
            $this -> fechaAlta = $resultado[1];
            $this -> fechaEntrevistaInicial = $resultado[2];
            $this -> fechaEntrevistaSeleccion = $resultado[3];
            $this -> fechaEntrevistaDirector = $resultado[4];
            $this -> fechaEntrevistaCarrera = $resultado[5];
            $this -> plaza = $resultado[6];
            $this -> claveTemporal = $resultado[7];
            $this -> fechaClaveTemporal = $resultado[8];
            $this -> clavePermanente = $resultado[9];
            $this -> fechaClavePermanente = $resultado[10];
            $this -> cedula = $resultado[11];
            $this -> fechaVigenciaCedula = $resultado[12];
            $this -> polizaRC = $resultado[13];
            $this -> fechaVigenciaPolizaRC = $resultado[14];
            $this -> fechaEscuelaComercial = $resultado[15];
            $this -> conexion -> close();
            return true;
        }	
        else{
            $this -> conexion -> close();
            return false;
        }
    }
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDao -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> conexion -> close();
        $this -> idAdministrador = $resultado[0];
        $this -> fechaAlta = $resultado[1];
        $this -> fechaEntrevistaInicial = $resultado[2];
        $this -> fechaEntrevistaSeleccion = $resultado[3];
        $this -> fechaEntrevistaDirector = $resultado[4];
        $this -> fechaEntrevistaCarrera = $resultado[5];
        $this -> plaza = $resultado[6];
        $this -> claveTemporal = $resultado[7];
        $this -> fechaClaveTemporal = $resultado[8];
        $this -> clavePermanente = $resultado[9];
        $this -> fechaClavePermanente = $resultado[10];
        $this -> cedula = $resultado[11];
        $this -> fechaVigenciaCedula = $resultado[12];
        $this -> polizaRC = $resultado[13];
        $this -> fechaVigenciaPolizaRC = $resultado[14];
        $this -> fechaEscuelaComercial = $resultado[15];
    }
    function consultarTodos(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDao -> consultarTodos());
        $administrador = array();
        while ($resultado = $this -> conexion -> extraer()){
            array_push($administrador, new Agente($resultado[0], $resultado[1], $resultado[2], $resultado[3], $resultado[4], $resultado[5], $resultado[6], $resultado[7], $resultado[8], $resultado[9], $resultado[10], $resultado[11], $resultado[12], $resultado[13], $resultado[14], $resultado[15]));
        }
        $this -> conexion -> close();
        return $resultado;
    }
function eliminar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDao -> eliminar());
        $this -> conexion -> close();
    }



}
?>