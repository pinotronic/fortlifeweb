<?php
require("persistencia/AdministradorDAO.php");
class Administrador{
    public $idAdministrador;
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


    function getFecha(){
        return $this -> fecha;
    }
    function setFecha($pfecha){
        $this -> fecha = $pfecha;
    }
    function getNombre(){
        return $this -> nombre;
    }
    function setNombre($pNombre){
        $this -> nombre = $pNombre;
    }
    function getApellido(){
        return $this -> apellido;
    }
    function setApellido($pApellido){
        $this -> apellido = $pApellido;
    }
    function getDireccion(){
        return $this -> direccion;
    }
    function setDireccion($pDireccion){
        $this -> direccion = $pDireccion;
    }
    function getColonia(){
        return $this -> colonia;
    }
    function setColonia($pColonia){
        $this -> colonia = $pColonia;
    }
    function getCiudad(){
        return $this -> ciudad;
    }
    function setCiudad($pCiudad){
        $this -> ciudad = $pCiudad;
    }
    function getEstado(){
        return $this -> estado;
    }
    function setEstado($pEstado){
        $this -> estado = $pEstado;
    }
    function getCorreo(){
        return $this -> correo;
    }
    function setCorreo($pCorreo){
        $this -> correo = $pCorreo;
    }
    function getClave(){
        return $this -> clave;
    }
    function setClave($pClave){
        $this -> clave = $pClave;
    }
    function getFoto(){
        return $this -> foto;
    }
    function setFoto($pFoto){
        $this -> foto = $pFoto;
    }
    function getTelefono(){
        return $this -> telefono;
    }
    function setTelefono($pTelefono){
        $this -> telefono = $pTelefono;
    }
    function getCelular(){
        return $this -> celular;
    }
    function setCelular($pCelular){
        $this -> celular = $pCelular;
    }
    function getRfc(){
        return $this -> rfc;
    }
    function setRfc($pRfc){
        $this -> rfc = $pRfc;
    }
    function getCurp(){
        return $this -> curp;
    }
    function setCurp($pCurp){
        $this -> curp = $pCurp;
    }
    function getFechaNacimiento(){
        return $this -> fechaNacimiento;
    }
    function setFechaNacimiento($pFechaNacimiento){
        $this -> fechaNacimiento = $pFechaNacimiento;
    }
    function getStatus(){
        return $this -> status;
    }
    function setStatus($pStatus){
        $this -> status = $pStatus;
    }
    function getCargo(){
        return $this -> cargo;
    }
    function setCargo($pCargo){
        $this -> cargo = $pCargo;
    }
    function getidAdministrador(){
        return $this -> idAdministrador;
    }
    function setidAdministrador($pIdAdministrador){
        $this -> idAdministrador = $pIdAdministrador;
    }

    public function __construct($pIdAdministrador = "", $pfecha="", $pNombre = "", $pApellido = "", $pDireccion = "", $pColonia = "", $pCiudad = "", $pEstado = "", $pCorreo = "", $pClave = "", $pFoto = "", $pTelefono = "", $pCelular = "", $pRfc = "", $pCurp = "", $pFechaNacimiento = "", $pStatus = "", $pCargo = ""){
        $this -> idAdministrador = $pIdAdministrador;
        $this -> fecha = $pfecha;
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
        $this -> administradorDAO = new AdministradorDAO($this -> idAdministrador, $this -> fecha, $this -> nombre, $this -> apellido, $this -> direccion, $this -> colonia, $this -> ciudad, $this -> estado, $this -> correo, $this -> clave, $this -> foto, $this -> telefono, $this -> celular, $this -> rfc, $this -> curp, $this -> fechaNacimiento, $this -> status, $this -> cargo);
        $this -> conexion = new Conexion();
        //var_dump($pIdAdministrador);
    }
    public function insertar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> insertar());
        $this -> conexion -> close();
    }
    function actualizar(){
        var_dump($this -> idAdministrador);
        var_dump($this -> fecha);
        var_dump($this -> nombre);
        var_dump($this -> apellido);
        var_dump($this -> direccion);
        var_dump($this -> colonia);
        var_dump($this -> ciudad);
        var_dump($this -> estado);
        var_dump($this -> correo);
        var_dump($this -> clave);
        var_dump($this -> foto);
        var_dump($this -> telefono);
        var_dump($this -> celular);
        var_dump($this -> rfc);
        var_dump($this -> curp);
        var_dump($this -> fechaNacimiento);
        var_dump($this -> status);
        var_dump($this -> cargo);


        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> actualizar());
        $this -> conexion -> close();
    }
    function autenticar($correo, $clave){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> autenticar($correo,$clave));
        if($this -> conexion -> numFilas()==1){
            $resultado = $this -> conexion -> extraer();
            $this -> idAdministrador = $resultado[0];
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
            $this -> conexion -> close();
            return true;
        }else{
            $this -> conexion -> close();
            return false;
        }
    }

    function consultar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> consultar());
        $resultado = $this -> conexion -> extraer();
        if(!empty($resultado)){        
            $this -> idAdministrador = $resultado[0];
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
            $this -> conexion -> close();
    }else{
        $this -> conexion -> close();
        return false;
    }
}
    function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> consultarTodo());
        $administrador = array();
        while ($resultado = $this -> conexion -> extraer()){
            array_push($administrador, new Administrador($resultado[0],
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
             $resultado[17]));
        }
        $this -> conexion -> close();
        return $administrador;
    }
    function eliminar(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> eliminar());
        $this -> conexion -> close();
    }
}
?>