<?php
class AgenteDAO {
    public $idAgente;
    public $fecha;
    public $nombre;
    public $apellido;
    public $direccion;
    public $colonia;
    public $ciudad;
    public $estado;
    public $correo;
    public $clave;
    public $foto;
    public $telefono;
    public $celular;
    public $rfc;
    public $curp;
    public $fechaNacimiento;
    public $status;
    public $cargo;
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
    
    public function __construct($pIdAgente="", $pFecha="", $pNombre="", $pApellido="", $pDireccion="", $pColonia="", $pCiudad="", $pEstado="", $pCorreo="", $pClave="", $pFoto="", $pTelefono="", $pCelular="", $pRfc="", $pCurp="", $pFechaNacimiento="", $pStatus="", $pCargo="", $pFechaAlta="", $pFechaEntrevistaInicial="", $pFechaEntrevistaSeleccion="", $pFechaEntrevistaDirector="", $pFechaEntrevistaCarrera="", $pPlaza="", $pClaveTemporal="", $pFechaClaveTemporal="", $pClavePermanente="", $pFechaClavePermanente="", $pFechaEscuelaCedula="", $pFechaExamen="", $pCedula="", $pFechaVigenciaCedula="", $pPolizaRC="", $pFechaVigenciaPolizaRC="", $pFechaEscuelaComercial="") {
        $this -> idAgente = $pIdAgente;
        $this -> fecha = $pFecha;
        $this -> nombre = $pNombre;
        $this -> apellido = $pApellido;
        $this -> direccion = $pDireccion;
        $this -> colonia = $pColonia;
        $this -> ciudad = $pCiudad;
        $this -> estado = $pEstado;
        $this -> correo = $pCorreo;
        $this -> clave = $pClave;
        $this -> foto = $pFoto;
        $this -> telefono = $pTelefono;
        $this -> celular = $pCelular;
        $this -> rfc = $pRfc;
        $this -> curp = $pCurp;
        $this -> fechaNacimiento = $pFechaNacimiento;
        $this -> status = $pStatus;
        $this -> cargo = $pCargo;
        $this -> fechaAlta = $pFechaAlta;
        $this -> fechaEntrevistaInicial = $pFechaEntrevistaInicial;
        $this -> fechaEntrevistaSeleccion = $pFechaEntrevistaSeleccion;
        $this -> fechaEntrevistaDirector = $pFechaEntrevistaDirector;
        $this -> fechaEntrevistaCarrera = $pFechaEntrevistaCarrera;
        $this -> plaza = $pPlaza;
        $this -> claveTemporal = $pClaveTemporal;
        $this -> fechaClaveTemporal = $pFechaClaveTemporal;
        $this -> clavePermanente = $pClavePermanente;
        $this -> fechaClavePermanente = $pFechaClavePermanente;
        $this -> fechaEscuelaCedula = $pFechaEscuelaCedula;
        $this -> fechaExamen = $pFechaExamen;
        $this -> cedula = $pCedula;
        $this -> fechaVigenciaCedula = $pFechaVigenciaCedula;
        $this -> polizaRC = $pPolizaRC;
        $this -> fechaVigenciaPolizaRC = $pFechaVigenciaPolizaRC;
        $this -> fechaEscuelaComercial = $pFechaEscuelaComercial;
    }
    function consultar(){
        return "select 	idAgente, fecha, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo, fechaAlta, fechaEntrevistaInicial, fechaEntrevistaSeleccion, fechaEntrevistaDirector, fechaEntrevistaCarrera, plaza, claveTemporal, fechaClaveTemporal, clavePermanente, fechaClavePermanente, fechaEscuelaCedula, fechaExamen, cedula, fechaVigenciaCedula, polizaRC, fechaVigenciaPolizaRC, fechaEscuelaComercial
        from agente
        where idAgente = \"" . $this -> idAgente . "\"";
    }
    function consultarAgente(){
        //vardump($idAdministrador);

        //return "select 	idAgente, idAdministrador, fechaAlta, fechaEntrevistaInicial, fechaEntrevistaSeleccion, fechaEntrevistaDirector, fechaEntrevistaCarrera, plaza, claveTemporal, fechaClaveTemporal, clavePermanente, fechaClavePermanente, fechaEscuelaCedula, fechaExamen, cedula, fechaVigenciaCedula, polizaRC, fechaVigenciaRC, fechaEscuelaComercial
        //from agente
        //where idAdministrador = \"" . $this -> idAdministrador . "\"";
        
        return "SELECT * FROM agente WHERE idAgente='$pIdAgente'";
        //return "SELECT * FROM agente WHERE idAdministrador = '$idAdministrador'";
    }

    function consultarTodo(){
        return "select idAgente, fecha, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo, fechaAlta, fechaEntrevistaInicial, fechaEntrevistaSeleccion, fechaEntrevistaDirector, fechaEntrevistaCarrera, plaza, claveTemporal, fechaClaveTemporal, clavePermanente, fechaClavePermanente, fechaEscuelaCedula, fechaExamen, cedula, fechaVigenciaCedula, polizaRC, fechaVigenciaPolizaRC, fechaEscuelaComercial from agente";
    }
    function eliminar(){
        return "delete from agente
        where idAgente = \"" . $this -> idAgente . "\""; 
    }
    function insertar(){
        $clave ="";
        $clave = md5($this-> clave);
        return "insert into agente ( idAgente, fecha, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo, fechaAlta, fechaEntrevistaInicial, fechaEntrevistaSeleccion, fechaEntrevistaDirector, fechaEntrevistaCarrera, plaza, claveTemporal, fechaClaveTemporal, clavePermanente, fechaClavePermanente, fechaEscuelaCedula, fechaExamen, cedula, fechaVigenciaCedula, polizaRC, fechaVigenciaPolizaRC, fechaEscuelaComercial
        )
                values (\"" . $this -> idAgente . "\",
                \"" . $this -> fecha . "\",
                \"" . $this -> nombre . "\",
                \"" . $this -> apellido . "\",
                \"" . $this -> direccion . "\",
                \"" . $this -> colonia . "\",
                \"" . $this -> ciudad . "\",
                \"" . $this -> estado . "\",
                \"" . $this -> correo . "\",
                \"" . $this -> clave . "\",
                \"" . $this -> foto . "\",
                \"" . $this -> telefono . "\",
                \"" . $this -> celular . "\",
                \"" . $this -> rfc . "\",
                \"" . $this -> curp . "\",
                \"" . $this -> fechaNacimiento . "\",
                \"" . $this -> status . "\",
                \"" . $this -> cargo . "\",
                \"" . $this -> fechaAlta . "\",
                \"" . $this -> fechaEntrevistaInicial . "\",    
                \"" . $this -> fechaEntrevistaSeleccion . "\",
                \"" . $this -> fechaEntrevistaDirector . "\",
                \"" . $this -> fechaEntrevistaCarrera . "\",
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
                \"" . $this -> fechaVigenciaPolizaRC . "\",
                \"" . $this -> fechaEscuelaComercial . "\"
                )";
    }
    function actualizar(){
        $clave ="";
        $clave = md5($this-> clave);
        return "update agente set
                fecha = \"" . $this -> fecha . "\",
                nombre = \"" . $this -> nombre . "\",
                apellido = \"" . $this -> apellido . "\",
                direccion = \"" . $this -> direccion . "\",
                colonia = \"" . $this -> colonia . "\",
                ciudad = \"" . $this -> ciudad . "\",
                estado = \"" . $this -> estado . "\",
                correo = \"" . $this -> correo . "\",
                clave = \"" . $this -> clave . "\",
                foto = \"" . $this -> foto . "\",
                telefono = \"" . $this -> telefono . "\",
                celular = \"" . $this -> celular . "\",
                rfc = \"" . $this -> rfc . "\",
                curp = \"" . $this -> curp . "\",
                fechaNacimiento = \"" . $this -> fechaNacimiento . "\",
                status = \"" . $this -> status . "\",
                cargo = \"" . $this -> cargo . "\",
                fechaAlta = \"" . $this -> fechaAlta . "\",
                fechaEntrevistaInicial = \"" . $this -> fechaEntrevistaInicial . "\",    
                fechaEntrevistaSeleccion = \"" . $this -> fechaEntrevistaSeleccion . "\",
                fechaEntrevistaDirector = \"" . $this -> fechaEntrevistaDirector . "\",
                fechaEntrevistaCarrera = \"" . $this -> fechaEntrevistaCarrera . "\",
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
                fechaVigenciaPolizaRC = \"" . $this -> fechaVigenciaPolizaRC . "\",
                fechaEscuelaComercial = \"" . $this -> fechaEscuelaComercial . "\"
                where idAgente = \"" . $this -> idAgente . "\"";
    }
}
?>