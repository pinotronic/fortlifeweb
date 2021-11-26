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

    function setIdAgente($pIdAgente){
        $this->idAgente = $pIdAgente;
    }
    function getIdAgente(){
        return $this->idAgente;
    }//end of IdAgente 1
    function setFecha($pFecha){
        $this->fecha = $pFecha;
    }
    function getFecha(){
        return $this->fecha;
    }//end of Fecha 2
    function setNombre($pNombre){
        $this->nombre = $pNombre;
    }
    function getNombre(){
        return $this->nombre;
    }//end of Nombre 3
    function setApellido($pApellido){
        $this->apellido = $pApellido;
    }
    function getApellido(){
        return $this->apellido;
    }//end of Apellido 4
    function setDireccion($pDireccion){
        $this->direccion = $pDireccion;
    }
    function getDireccion(){
        return $this->direccion;
    }//end of Direccion 5
    function setColonia($pColonia){
        $this->colonia = $pColonia;
    }
    function getColonia(){
        return $this->colonia;
    }//end of Colonia 6
    function setCiudad($pCiudad){
        $this->ciudad = $pCiudad;
    }
    function getCiudad(){
        return $this->ciudad;
    }//end of Ciudad 7
    function setEstado($pEstado){
        $this->estado = $pEstado;
    }
    function getEstado(){
        return $this->estado;
    }// end of Estado 8
    function setCorreo($pCorreo){
        $this->correo = $pCorreo;
    }
    function getCorreo(){
        return $this->correo;
    }//end of Correo 9
    function setClave($pClave){
        $this->clave = $pClave;
    }
    function getClave(){
        return $this->clave;
    }//end of Clave 10
    function setFoto($pFoto){
        $this->foto = $pFoto;
    }
    function getFoto(){
        return $this->foto;
    }//end of Foto 11
    function setTelefono($pTelefono){
        $this->telefono = $pTelefono;
    }
    function getTelefono(){
        return $this->telefono;
    }// end of Telefono 12
    function setCelular($pCelular){
        $this->celular = $pCelular;
    }
    function getCelular(){
        return $this->celular;
    }// end of Celular 13
    function setRfc($pRfc){
        $this->rfc = $pRfc;
    }
    function getRfc(){
        return $this->rfc;
    } //end of Rfc 14
    function setCurp($pCurp){
        $this->curp = $pCurp;
    }
    function getCurp(){
        return $this->curp;
    }//end of Curp 15
    function setFechaNacimiento($pFechaNacimiento){
        $this->fechaNacimiento = $pFechaNacimiento;
    }
    function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }// end of FechaNacimiento 16
    function setStatus($pStatus){
        $this->status = $pStatus;
    }
    function getStatus(){
        return $this->status;
    }// end of Status 17
    function setCargo($pCargo){
        $this->cargo = $pCargo;
    }
    function getCargo(){
        return $this->cargo;
    }// end of Cargo 18
    function setFechaAlta($pFechaAlta){
        $this->fechaAlta = $pFechaAlta;
    }
    function getFechaAlta(){
        return $this->fechaAlta;
    }// end of FechaAlta 19
    function setFechaEntrevistaInicial($pFechaEntrevistaInicial){
        $this->fechaEntrevistaInicial = $pFechaEntrevistaInicial;
    }
    function getFechaEntrevistaInicial(){
        return $this->fechaEntrevistaInicial;
    }// end of FechaEntrevistaInicial 20
    function setFechaEntrevistaSeleccion($pFechaEntrevistaSeleccion){
        $this->fechaEntrevistaSeleccion = $pFechaEntrevistaSeleccion;
    }
    function getFechaEntrevistaSeleccion(){
        return $this->fechaEntrevistaSeleccion;
    }// end of FechaEntrevistaSeleccion 21
    function setFechaEntrevistaDirector($pFechaEntrevistaDirector){
        $this->fechaEntrevistaDirector = $pFechaEntrevistaDirector;
    }
    function getFechaEntrevistaDirector(){
        return $this->fechaEntrevistaDirector;
    }// end of FechaEntrevistaDirector 22
    function setFechaEntrevistaCarrera($pFechaEntrevistaCarrera){
        $this->fechaEntrevistaCarrera = $pFechaEntrevistaCarrera;
    }
    function getFechaEntrevistaCarrera(){
        return $this->fechaEntrevistaCarrera;
    }// end of FechaEntrevistaCarrera 23
    function setPlaza($pPlaza){
        $this->plaza = $pPlaza;
    }
    function getPlaza(){
        return $this->plaza;
    }// end of Plaza 24
    function setClaveTemporal($pClaveTemporal){
        $this->claveTemporal = $pClaveTemporal;
    }
    function getClaveTemporal(){
        return $this->claveTemporal;
    }// end of ClaveTemporal 25
    function setFechaClaveTemporal($pFechaClaveTemporal){
        $this->fechaClaveTemporal = $pFechaClaveTemporal;
    }
    function getFechaClaveTemporal(){
        return $this->fechaClaveTemporal;
    }// end of FechaClaveTemporal 26
    function setClavePermanente($pClavePermanente){
        $this->clavePermanente = $pClavePermanente;
    }
    function getClavePermanente(){
        return $this->clavePermanente;
    }// end of ClavePermanente 27
    function setFechaClavePermanente($pFechaClavePermanente){
        $this->fechaClavePermanente = $pFechaClavePermanente;
    }
    function getFechaClavePermanente(){
        return $this->fechaClavePermanente;
    }// end of FechaClavePermanente 28
    function setFechaEscuelaCedula($pFechaEscuelaCedula){
        $this->fechaEscuelaCedula = $pFechaEscuelaCedula;
    }
    function getFechaEscuelaCedula(){
        return $this->fechaEscuelaCedula;
    }// end of FechaEscuelaCedula 29
    function setFechaExamen($pFechaExamen){
        $this->fechaExamen = $pFechaExamen;
    }
    function getFechaExamen(){
        return $this->fechaExamen;
    }// end of FechaExamen 30
    function setCedula($pCedula){
        $this->cedula = $pCedula;
    }
    function getCedula(){
        return $this->cedula;
    }// end of Cedula 31
    function setFechaVigenciaCedula($pFechaVigenciaCedula){
        $this->fechaVigenciaCedula = $pFechaVigenciaCedula;
    }
    function getFechaVigenciaCedula(){
        return $this->fechaVigenciaCedula;
    }// end of FechaVigenciaCedula 32
    function setPolizaRC($pPolizaRC){
        $this->polizaRC = $pPolizaRC;
    }
    function getPolizaRC(){
        return $this->polizaRC;
    }// end of PolizaRC 33
    function setFechaVigenciaPolizaRC($pFechaVigenciaPolizaRC){
        $this->fechaVigenciaPolizaRC = $pFechaVigenciaPolizaRC;
    }
    function getFechaVigenciaPolizaRC(){
        return $this->fechaVigenciaPolizaRC;
    }// end of FechaVigenciaPolizaRC 34
    function setFechaEscuelaComercial($pFfechaEscuelaComercial){
        $this->fechaEscuelaComercial = $pFfechaEscuelaComercial;
    }
    function getFechaEscuelaComercial(){
        return $this->fechaEscuelaComercial;
    }// end of FechaEscuelaComercial 35

    public function __construct( $pIdAgente="", $pFecha="", $pNombre="", $pApellido="", $pDireccion="", $pColonia="", $pCiudad="", $pEstado="", $pCorreo="", $pClave="", $pFoto="", $pTelefono="", $pCelular="", $pRfc="", $pCurp="", $pFechaNacimiento="", $pStatus="", $pCargo="", $pFechaAlta="", $pFechaEntrevistaInicial="", $pFechaEntrevistaSeleccion="", $pFechaEntrevistaDirector="", $pFechaEntrevistaCarrera="", $pPlaza="", $pClaveTemporal="", $pFechaClaveTemporal="", $pClavePermanente="", $pFechaClavePermanente="", $pFechaEscuelaCedula="", $pFechaExamen="", $pCedula="", $pFechaVigenciaCedula="", $pPolizaRC="", $pFechaVigenciaPolizaRC="", $pFechaEscuelaComercial="" ){
        $this -> idAgente = $pIdAgente; #1
        $this -> fecha = $pFecha; #2
        $this -> nombre = $pNombre; #3 
        $this -> apellido = $pApellido; #4
        $this -> direccion = $pDireccion; #5
        $this -> colonia = $pColonia; #6
        $this -> ciudad = $pCiudad; #7
        $this -> estado = $pEstado; #8
        $this -> correo = $pCorreo; #9
        $this -> clave = $pClave; #10
        $this -> foto = $pFoto; #11
        $this -> telefono = $pTelefono; #12
        $this -> celular = $pCelular; #13
        $this -> rfc = $pRfc; #14
        $this -> curp = $pCurp; #15
        $this -> fechaNacimiento = $pFechaNacimiento; #16
        $this -> status = $pStatus; #17
        $this -> cargo = $pCargo; #18
        $this -> fechaAlta = $pFechaAlta; #19
        $this -> fechaEntrevistaInicial = $pFechaEntrevistaInicial; #20
        $this -> fechaEntrevistaSeleccion = $pFechaEntrevistaSeleccion; #21
        $this -> fechaEntrevistaDirector = $pFechaEntrevistaDirector; #22
        $this -> fechaEntrevistaCarrera = $pFechaEntrevistaCarrera; #23
        $this -> plaza = $pPlaza; #24
        $this -> claveTemporal = $pClaveTemporal; #25
        $this -> fechaClaveTemporal = $pFechaClaveTemporal; #26
        $this -> clavePermanente = $pClavePermanente; #27
        $this -> fechaClavePermanente = $pFechaClavePermanente; #28
        $this -> fechaEscuelaCedula = $pFechaEscuelaCedula; #29
        $this -> fechaExamen = $pFechaExamen; #30
        $this -> cedula = $pCedula; #31
        $this -> fechaVigenciaCedula = $pFechaVigenciaCedula; #32
        $this -> polizaRC = $pPolizaRC; #33
        $this -> fechaVigenciaPolizaRC = $pFechaVigenciaPolizaRC; #34
        $this -> fechaEscuelaComercial = $pFechaEscuelaComercial; #35
        
        $this -> agenteDAO = new AgenteDAO($this -> idAgente, $this -> fecha, $this -> nombre, $this -> apellido, $this -> direccion, $this -> colonia, $this -> ciudad, $this -> estado, $this -> correo, $this -> clave, $this -> foto, $this -> telefono, $this -> celular, $this -> rfc, $this -> curp, $this -> fechaNacimiento, $this -> status, $this -> cargo, $this -> fechaAlta, $this -> fechaEntrevistaInicial, $this -> fechaEntrevistaSeleccion, $this -> fechaEntrevistaDirector, $this -> fechaEntrevistaCarrera, $this -> plaza, $this -> claveTemporal, $this -> fechaClaveTemporal, $this -> clavePermanente, $this -> fechaClavePermanente, $this -> fechaEscuelaCedula, $this -> fechaExamen, $this -> cedula, $this -> fechaVigenciaCedula, $this -> polizaRC, $this -> fechaVigenciaPolizaRC, $this -> fechaEscuelaComercial);
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
        //var_dump ($this ->idAgente);
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        if(!empty($resultado)){
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
            $this -> fechaExamen = $resultado[29];
            $this -> cedula = $resultado[30];
            $this -> fechaVigenciaCedula = $resultado[31];
            $this -> polizaRC = $resultado[32];
            $this -> fechaVigenciaPolizaRC = $resultado[33];
            $this -> fechaEscuelaComercial = $resultado[34];
            $this -> conexion -> close();
        }else{
            $this -> conexion -> close();
            return false;
        }
    }

    function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDAO -> consultarTodo());
        $agente = array();
        while ($resultado = $this -> conexion -> extraer()){         
            if(!empty($resultado)){
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

            }
                

        }
        $this -> conexion -> close(); 
        return $agente;
    }
function eliminar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> agenteDAO -> eliminar());
        $this -> conexion -> close();
    }
}
?>