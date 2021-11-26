<?php
class AgenteDAO {
    public $idAgente; // 1
    public $fecha; // 2
    public $nombre;// 3
    public $apellido;// 4
    public $direccion;// 5
    public $colonia;// 6
    public $ciudad;// 7
    public $estado;// 8
    public $correo;// 9
    public $clave;// 10
    public $foto;// 11
    public $telefono;// 12
    public $celular;// 13
    public $rfc;// 14
    public $curp;// 15
    public $fechaNacimiento;// 16
    public $status;// 17
    public $cargo;// 18
    public $fechaAlta;// 19
    public $fechaEntrevistaInicial;// 20
    public $fechaEntrevistaSeleccion;// 21
    public $fechaEntrevistaDirector;// 22
    public $fechaEntrevistaCarrera;// 23
    public $plaza; // 24
    public $claveTemporal;// 25
    public $fechaClaveTemporal;// 26
    public $clavePermanente;// 27
    public $fechaClavePermanente;// 28
    public $fechaEscuelaCedula;// 29
    public $fechaExamen;// 30
    public $cedula;// 31
    public $fechaVigenciaCedula;// 32
    public $polizaRC;// 33
    public $fechaVigenciaPolizaRC;// 34
    public $fechaEscuelaComercial;// 35
    
    public function __construct($pIdAgente="", $pFecha="", $pNombre="", $pApellido="", $pDireccion="", $pColonia="", $pCiudad="", $pEstado="", $pCorreo="", $pClave="", $pFoto="", $pTelefono="", $pCelular="", $pRfc="", $pCurp="", $pFechaNacimiento="", $pStatus="", $pCargo="", $pFechaAlta="", $pFechaEntrevistaInicial="", $pFechaEntrevistaSeleccion="", $pFechaEntrevistaDirector="", $pFechaEntrevistaCarrera="", $pPlaza="", $pClaveTemporal="", $pFechaClaveTemporal="", $pClavePermanente="", $pFechaClavePermanente="", $pFechaEscuelaCedula="", $pFechaExamen="", $pCedula="", $pFechaVigenciaCedula="", $pPolizaRC="", $pFechaVigenciaPolizaRC="", $pFechaEscuelaComercial="") {
        $this -> idAgente = $pIdAgente;// 1
        $this -> fecha = $pFecha;// 2
        $this -> nombre = $pNombre;// 3
        $this -> apellido = $pApellido;// 4
        $this -> direccion = $pDireccion;// 5
        $this -> colonia = $pColonia;// 6
        $this -> ciudad = $pCiudad;// 7
        $this -> estado = $pEstado;// 8
        $this -> correo = $pCorreo;// 9
        $this -> clave = $pClave;// 10
        $this -> foto = $pFoto;// 11
        $this -> telefono = $pTelefono;// 12
        $this -> celular = $pCelular;// 13
        $this -> rfc = $pRfc;// 14
        $this -> curp = $pCurp;// 15
        $this -> fechaNacimiento = $pFechaNacimiento;// 16
        $this -> status = $pStatus;// 17
        $this -> cargo = $pCargo;// 18
        $this -> fechaAlta = $pFechaAlta;// 19
        $this -> fechaEntrevistaInicial = $pFechaEntrevistaInicial;// 20
        $this -> fechaEntrevistaSeleccion = $pFechaEntrevistaSeleccion;// 21
        $this -> fechaEntrevistaDirector = $pFechaEntrevistaDirector;// 22
        $this -> fechaEntrevistaCarrera = $pFechaEntrevistaCarrera;// 23
        $this -> plaza = $pPlaza;// 24
        $this -> claveTemporal = $pClaveTemporal;// 25
        $this -> fechaClaveTemporal = $pFechaClaveTemporal;// 26
        $this -> clavePermanente = $pClavePermanente;// 27
        $this -> fechaClavePermanente = $pFechaClavePermanente;// 28
        $this -> fechaEscuelaCedula = $pFechaEscuelaCedula;// 29
        $this -> fechaExamen = $pFechaExamen;// 30
        $this -> cedula = $pCedula;// 31
        $this -> fechaVigenciaCedula = $pFechaVigenciaCedula;// 32
        $this -> polizaRC = $pPolizaRC;// 33
        $this -> fechaVigenciaPolizaRC = $pFechaVigenciaPolizaRC;// 34
        $this -> fechaEscuelaComercial = $pFechaEscuelaComercial;// 35
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

        return "insert into agente ( fecha, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo, fechaAlta, fechaEntrevistaInicial, fechaEntrevistaSeleccion, fechaEntrevistaDirector, fechaEntrevistaCarrera, plaza, claveTemporal, fechaClaveTemporal, clavePermanente, fechaClavePermanente, fechaEscuelaCedula, fechaExamen, cedula, fechaVigenciaCedula, polizaRC, fechaVigenciaPolizaRC, fechaEscuelaComercial)       
                values (\"" . $this -> fecha . "\",\"" . $this -> nombre . "\",\"" . $this -> apellido . "\",\"" . $this -> direccion . "\",\"" . $this -> colonia . "\",\"" . $this -> ciudad . "\",\"" . $this -> estado . "\",\"" . $this -> correo . "\",\"" . $clave . "\",\"" . $this -> foto . "\",\"" . $this -> telefono . "\",\"" . $this -> celular . "\",\"" . $this -> rfc . "\",\"" . $this -> curp . "\",\"" . $this -> fechaNacimiento . "\",\"" . $this -> status . "\",\"" . $this -> cargo . "\",\"" . $this -> fechaAlta . "\",\"" . $this -> fechaEntrevistaInicial . "\",\"" . $this -> fechaEntrevistaSeleccion . "\",\"" . $this -> fechaEntrevistaDirector . "\",\"" . $this -> fechaEntrevistaCarrera . "\",\"" . $this -> plaza . "\",\"" . $this -> claveTemporal . "\",\"" . $this -> fechaClaveTemporal . "\",\"" . $this -> clavePermanente . "\",\"" . $this -> fechaClavePermanente . "\",\"" . $this -> fechaEscuelaCedula . "\",\"" . $this -> fechaExamen . "\",\"" . $this -> cedula . "\",\"" . $this -> fechaVigenciaCedula . "\",\"" . $this -> polizaRC . "\",\"" . $this -> fechaVigenciaPolizaRC . "\",\"" . $this -> fechaEscuelaComercial . "\")";
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