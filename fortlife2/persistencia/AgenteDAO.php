<?php
class AgenteDAO{
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
    }
    function consultar(){
        return "select idAdministrador, fecha, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo
                    from agente
                    where idAdministrador = \"" . $this -> idAdministrador . "\"";
    }
    function consultarTodo(){
        return "select idAdministrador, nombre, apellido from agente";
    }
    function eliminar(){
        return "delete from agente
        where idAdministrador = \"" . $this -> idAdministrador . "\""; 
    }


}
?>