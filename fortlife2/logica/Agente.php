<?php
require("persistencia/agenteDAO.php");
class Agente{
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
    public $fechaEntrevistaCarera; 
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
    public $IdAgente;

    function setIdAgente($pIdAgente){
        $this->idAgente = $pIdAgente;
    }
    function getIdAgente(){
        return $this->idAgente;
    }    
    function setFecha($pFecha){
        $this->fecha = $pFecha;
    }
    function getFecha(){
        return $this->fecha;
    }
    function setNombre($pNombre){
        $this->nombre = $pNombre;
    }
    function getNombre(){
        return $this->nombre;
    }
    function setApellido($pApellido){
        $this->apellido = $pApellido;
    }
    function getApellido(){
        return $this->apellido;
    }
    function setDireccion($pDireccion){
        $this->direccion = $pDireccion;
    }
    function getDireccion(){
        return $this->direccion;
    }
    function setColonia($pColonia){
        $this->colonia = $pColonia;
    }
    function getColonia(){
        return $this->colonia;
    }
    function setCiudad($pCiudad){
        $this->ciudad = $pCiudad;
    }
    function getCiudad(){
        return $this->ciudad;
    }
    function setEstado($pEstado){
        $this->estado = $pEstado;
    }
    function getEstado(){
        return $this->estado;
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
    function setFoto($pFoto){
        $this->foto = $pFoto;
    }
    function getFoto(){
        return $this->foto;
    }
    function setTelefono($pTelefono){
        $this->telefono = $pTelefono;
    }
    function getTelefono(){
        return $this->telefono;
    }
    function setCelular($pCelular){
        $this->celular = $pCelular;
    }
    function getCelular(){
        return $this->celular;
    }
    function setRfc($pRfc){
        $this->rfc = $pRfc;
    }
    function getRfc(){
        return $this->rfc;
    }
    function setCurp($pCurp){
        $this->curp = $pCurp;
    }
    function getCurp(){
        return $this->curp;
    }
    function setFechaNacimiento($pFechaNacimiento){
        $this->fechaNacimiento = $pFechaNacimiento;
    }
    function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }
    function setStatus($pStatus){
        $this->status = $pStatus;
    }
    function getStatus(){
        return $this->status;
    }
    function setCargo($pCargo){
        $this->cargo = $pCargo;
    }
    function getCargo(){
        return $this->cargo;
    }
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
    function setFechaEntrevistaSeleccion($pFechaEntrevistaSeleccion){
        $this->fechaEntrevistaSeleccion = $pFechaEntrevistaSeleccion;
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
    function setFechaEscuelaComercial($pFfechaEscuelaComercial){
        $this->fechaEscuelaComercial = $pFfechaEscuelaComercial;
    }
    function getFechaEscuelaComercial(){
        return $this->fechaEscuelaComercial;
    }

    public function __construct($pIdAgente="", $pFecha="", $pNombre="", $pApellido="", $pDireccion="", $pColonia="", $pCiudad="", $pEstado="", $pCorreo="", $pClave="", $pFoto="", $pTelefono="", $pCelular="", $pRfc="", $pCurp="", $pFechaNacimiento="", $pStatus="", $pCargo="", $pFechaAlta="", $pFechaEntrevistaInicial="", $pFechaEntrevistaSeleccion="", $pFechaEntrevistaDirector="", $pFechaEntrevistaCarera="", $pPlaza="", $pClaveTemporal="", $pFechaClaveTemporal="", $pClavePermanente="", $pFechaClavePermanente="", $pFechaEscuelaCedula="", $pFechaExamen="", $pCedula="", $pFechaVigenciaCedula="", $pPolizaRC="", $pFechaVigenciaPolizaRC="", $pFechaEscuelaComercial="" ){
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
        $this -> fechaEntrevistaCarrera = $pFechaEntrevistaCarera; 
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
        $this -> agenteDAO = new AgenteDAO($this -> idAgente, $this -> fecha, $this -> nombre, $this -> apellido, $this -> direccion, $this -> colonia, $this -> ciudad, $this -> estado, $this -> correo, $this -> clave, $this -> foto, $this -> telefono, $this -> celular, $this -> rfc, $this -> curp, $this -> fechaNacimiento, $this -> status, $this -> cargo, $this -> fechaAlta, $this -> fechaEntrevistaInicial, $this -> fechaEntrevistaSeleccion, $this -> fechaEntrevistaDirector, $this -> fechaEntrevistaCarrera, $this -> plaza, $this -> claveTemporal, $this -> fechaClaveTemporal, $this -> clavePermanente, $this -> fechaClavePermanente, $this -> fechaEscuelaCedula, $this -> fechaExamen, $this -> cedula, $this -> fechaVigenciaCedula, $this -> polizaRC, $this -> fechaVigenciaPolizaRC, $this -> fechaEscuelaComercial,);
        $this -> conexion = new Conexion();
    }
    public function insertar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDAO -> insertar());
        $this -> conexion -> close();
    }
    function actualizar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDAO -> actualizar());
        $this -> conexion -> close();
    }
    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        $this -> conexion -> close();
        $this -> idAgente = $resultado[0];
        $this -> fecha = $resultado[1];
        $this -> nombre = $resultado[2];
        $this -> apellido = $resultado[3];
        $this -> direccion = $resultado[4];
        $this -> colonia = $resultado[5];
        $this -> ciudad = $resultado[6];
        $this -> estado = $resultado[7];
        $this -> correo = $resultado[8];
        $this -> clave = $resultado[9];
        $this -> foto = $resultado[10];
        $this -> telefono = $resultado[11];
        $this -> celular = $resultado[12];
        $this -> rfc = $resultado[13];
        $this -> curp = $resultado[14];
        $this -> fechaNacimiento = $resultado[15];
        $this -> status = $resultado[16];
        $this -> cargo = $resultado[17];
        $this -> fechaAlta = $resultado[18];
        $this -> fechaEntrevistaInicial = $resultado[19];    
        $this -> fechaEntrevistaSeleccion = $resultado[20];
        $this -> fechaEntrevistaDirector = $resultado[21];
        $this -> fechaEntrevistaCarrera = $resultado[22];
        $this -> plaza = $resultado[23]; 
        $this -> claveTemporal = $resultado[24];
        $this -> fechaClaveTemporal = $resultado[25];
        $this -> clavePermanente = $resultado[26];
        $this -> fechaClavePermanente = $resultado[27];
        $this -> fechaEscuelaCedula = $resultado[28];
        $this -> fechaExame = $resultado[29];
        $this -> cedula = $resultado[30];
        $this -> fechaVigenciaCedula = $resultado[31];
        $this -> polizaRC = $resultado[32];
        $this -> fechaVigenciaPolizaRC = $resultado[33];
        $this -> fechaEscuelaComercial = $resultado[34];
        
    }

    function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDAO -> consultarTodo());
        $agente = array();
        while ($resultado = $this -> conexion -> extraer()){
            array_push($agente, new Agente($resultado[0],
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
                $resultado[12], 
                $resultado[13], 
                $resultado[14], 
                $resultado[15], 
                $resultado[16], 
                $resultado[17], 
                $resultado[18], 
                $resultado[19],
                $resultado[20],
                $resultado[21],
                $resultado[22],
                $resultado[23],
                $resultado[24],
                $resultado[25],
                $resultado[26],
                $resultado[27],
                $resultado[28],
                $resultado[29],
                $resultado[30],
                $resultado[31],
                $resultado[32],
                $resultado[33],
                $resultado[34]));
                $this -> conexion -> close();
                return $agente;
        }

    }
function eliminar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDAO -> eliminar());
        $this -> conexion -> close();
    }
}
?>