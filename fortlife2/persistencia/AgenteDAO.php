<?php
class AgenteDAO{
    public $idAgente;
    public $idAdministrador;
    public $fechaAlta;
    public $fechaEntrevistaInicial;    
    public $fechaEntrevistaSeleccion;
    public $fechaEntrevistaDirector;
    public $fechaEntrevistaCarrera;
    public $plaza; 
    public $claveTemporal;
    public $fechaClaveTemporal;
    public $clavePermanente;
    public $fechaClavePermanente;
    public $fechaEscuelaCedula;
    public $fechaExamen;
    public $cedula;
    public $fechaVigenciaCedula;
    public $polizaRC;
    public $fechaVigenciaPolizaRC;
    public $fechaEscuelaComercial;
    public $IdAdministrador;
    public function __construct($pIdAgente="", $pIdAdministrador="", $pFechaAlta="", $pFechaEntrevistaInicial="", $pFechaEntrevistaSeleccion="", $pFechaEntrevistaDirector="", $pFechaEntrevistaCarrera="", $pPlaza="", $pClaveTemporal="", $pFechaClaveTemporal="", $pClavePermanente="", $pFechaClavePermanente="",$pFechaEscuelaCedula="", $pFechaExamen="", $pCedula="", $pFechaVigenciaCedula="", $pPolizaRC="", $pFechaVigenciaPolizaRC="", $pFechaEscuelaComercial=""){
        $this -> idAgente = $pIdAgente;
        $this->idAdministrador = $pIdAdministrador;
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
        $this->fechaEscuelaCedula = $pFechaEscuelaCedula;
        $this->fechaExamen = $pFechaExamen;
        $this->cedula = $pCedula;
        $this->fechaVigenciaCedula = $pFechaVigenciaCedula;
        $this->polizaRC = $pPolizaRC;
        $this->fechaVigenciaPolizaRC = $pFechaVigenciaPolizaRC;
        $this->fechaEscuelaComercial = $pFechaEscuelaComercial;
    }
    function consultar(){
        return "select 	idAgente, idAdministrador, fechaAlta, fechaEntrevistaInicial, fechaEntrevistaSeleccion, fechaEntrevistaDirector, fechaEntrevistaCarera, plaza, claveTemporal, fechaClaveTemporal, clavePermanente, fechaClavePermanente, fechaEscuelaCedula, fechaExamen, cedula, fechaVigenciaCedula, polizaRC, fechaVigenciaRC, fechaEscuelaComercial
        from agente
        where idAdministrador = \"" . $this -> idAdministrador . "\"";
    }
    function consultarAgente(){
        //var_dump($this -> idAdministrador);
        return "select 	idAgente, idAdministrador, fechaAlta, fechaEntrevistaInicial, fechaEntrevistaSeleccion, fechaEntrevistaDirector, fechaEntrevistaCarera, plaza, claveTemporal, fechaClaveTemporal, clavePermanente, fechaClavePermanente, fechaEscuelaCedula, fechaExamen, cedula, fechaVigenciaCedula, polizaRC, fechaVigenciaRC, fechaEscuelaComercial
        from agente
        where idAdministrador = \"" . $this -> idAdministrador . "\"";
        
        //return "SELECT * FROM agente WHERE idAdministrador =\"" . $this -> idAdministrador . "\"";
        //return "SELECT * FROM agente WHERE idAdministrador = '$idAdministrador'";
    }

    function consultarTodo(){
        return "select idAgente, idAdministrador, fechaAlta, fechaEntrevistaInicial, fechaEntrevistaSeleccion, fechaEntrevistaDirector, fechaEntrevistaCarera, plaza, claveTemporal, fechaClaveTemporal, clavePermanente, fechaClavePermanente, fechaEscuelaCedula, fechaExamen, cedula, fechaVigenciaCedula, polizaRC, fechaVigenciaRC, fechaEscuelaComercial
        from agente";
    }
    function eliminar(){
        return "delete from agente
        where idAdministrador = \"" . $this -> idAdministrador . "\""; 
    }
    function insertar(){
        $clave ="";
        $clave = md5($this-> clave);
        return "insert into agente ( idAgente, idAdministrador, fechaAlta, fechaEntrevistaInicial, fechaEntrevistaSeleccion, fechaEntrevistaDirector, fechaEntrevistaCarera, plaza, claveTemporal, fechaClaveTemporal, clavePermanente, fechaClavePermanente, fechaEscuelaCedula, fechaExamen, cedula, fechaVigenciaCedula, polizaRC, fechaVigenciaRC, fechaEscuelaComercial
        )
                values (\"" . $this -> idAdministrador . "\",
                        \"" . $this -> fechaAlta . "\",            
                        \"" . $this -> fechaEntrevistaInicial . "\",
                       \"" . $this -> fechaEntrevistaSeleccion . "\",
                       \"" . $this -> fechaEntrevistaDirector . "\",                   \"" . $this -> fechaEntrevistaCarera . "\",
                       \"" . $this -> plaza . "\",
                       \"" . $this -> claveTemporal . "\",
                       \"" . $this -> fechaClaveTemporal . "\",
                       \"" . $this -> clavePermanente . "\",
                       \"" . $this -> fechaClavePermanente . "\",
                       \"" . $this -> fechaEscuelaCedula . "\",
                       \"" . $this -> fechaExamen . "\",
                       \"" . $this -> cedula . "\",
                       \"" . $this -> fechaVigenciaCedula . "\",
                       \"" . $this -> polizaRC . "\",
                       \"" . $this -> fechaVigenciaRC . "\",
                       \"" . $this -> fechaEscuelaComercial . "\")";
    }
    function actualizar(){
        return "update agente set
                idAdministrador = \"" . $this -> idAdministrador . "\",
                fechaAlta = \"" . $this -> fechaAlta . "\",
                fechaEntrevistaInicial = \"" . $this -> fechaEntrevistaInicial . "\",
                fechaEntrevistaSeleccion = \"" . $this -> fechaEntrevistaSeleccion . "\",
                fechaEntrevistaDirector = \"" . $this -> fechaEntrevistaDirector . "\",
                fechaEntrevistaCarera = \"" . $this -> fechaEntrevistaCarera . "\",
                plaza = \"" . $this -> plaza . "\",
                claveTemporal = \"" . $this -> claveTemporal . "\",
                fechaClaveTemporal = \"" . $this -> fechaClaveTemporal . "\",
                clavePermanente = \"" . $this -> clavePermanente . "\",
                fechaClavePermanente = \"" . $this -> fechaClavePermanente . "\",
                fechaEscuelaCedula = \"" . $this -> fechaEscuelaCedula . "\",
                fechaExamen = \"" . $this -> fechaExamen . "\",
                cedula = \"" . $this -> cedula . "\",
                fechaVigenciaCedula = \"" . $this -> fechaVigenciaCedula . "\",
                polizaRC = \"" . $this -> polizaRC . "\",
                fechaVigenciaRC = \"" . $this -> fechaVigenciaRC . "\",
                fechaEscuelaComercial = \"" . $this -> fechaEscuelaComercial . "\"
                where idAdministrador = \"" . $this -> idAdministrador . "\"";
    }
}
?>

