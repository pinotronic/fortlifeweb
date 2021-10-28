<?php
require("persistencia/AdministradorDAO.php");
require("persistencia/Conexion.php");
class Administrador{
    public $idAdministrador;
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
    public $IdAdministrador;
    function getNombre(){
        return $this -> nombre;
    }
    function setNombre($nombre){
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
    function getIdAdministrador(){
        return $this -> idAdministrador;
    }
    function setIdAdministrador($IdAdministrador){
        $this -> idAdministrador = $IdAdministrador;
    }
    public function __construct($pIdAdministrador ="", $pNombre = "", $pApellido = "", $pDireccion="", $pColonia="", $pCiudad="", $pEstado="", $pCorreo="", $pClave="", $pFoto="", $pTelefono="", $pCelular="", $pRfc="", $pCurp="", $pFechaNacimiento="", $pStatus="", $pCargo=""){
        $this -> idAdministrador = $pIdAdministrador;
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
        $this -> administradorDAO = new AdministradorDAO($this -> idAdministrador, $this -> nombre, $this -> apellido, $this -> direccion, $this -> colonia, $this -> ciudad, $this -> estado, $this -> correo, $this -> clave, $this -> foto, $this -> telefono, $this -> celular, $this -> rfc, $this -> curp, $this -> fechaNacimiento, $this -> status, $this -> cargo);
        $this -> conexion = new Conexion();
    }
    function autenticar($correo, $clave){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> autenticar($correo,$clave));
        if($this -> conexion -> numFilas()==1){
            $resultado = $this -> conexion -> extraer();
            $this -> idAdministrador = $resultado[0];
            $this -> nombre = $resultado[1];
            $this -> apellido = $resultado[2];
            $this -> direccion = $resultado[3];
            $this -> colonia = $resultado[4];
            $this -> ciudad = $resultado[5];
            $this -> estado = $resultado[6];
            $this -> correo = $resultado[7];
            $this -> clave = $resultado[8];
            $this -> foto = $resultado[9];
            $this -> telefono = $resultado[10];
            $this -> celular = $resultado[11];
            $this -> rfc = $resultado[12];
            $this -> curp = $resultado[13];
            $this -> fechaNacimiento = $resultado[14];
            $this -> status = $resultado[15];
            $this -> cargo = $resultado[16];
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
        $this -> conexion -> close();
        $this -> idAdministrador = $resultado[0];
        $this -> nombre = $resultado[1];
        $this -> apellido = $resultado[2];
        $this -> direccion = $resultado[3];
        $this -> colonia = $resultado[4];
        $this -> ciudad = $resultado[5];
        $this -> estado = $resultado[6];
        $this -> correo = $resultado[7];
        $this -> clave = $resultado[8];
        $this -> foto = $resultado[9];
        $this -> telefono = $resultado[10];
        $this -> celular = $resultado[11];
        $this -> rfc = $resultado[12];
        $this -> curp = $resultado[13];
        $this -> fechaNacimiento = $resultado[14];
        $this -> status = $resultado[15];
        $this -> cargo = $resultado[16];
    }
    function consultarTodo(){
        $this -> conexion -> abrir();
        $this -> conexion -> ejecutar($this -> administradorDAO -> consultarTodo());
        $administrador = array();
        while ($resultado = $this -> conexion -> extraer()){
            array_push($administrador, new Administrador($resultado[0], $resultado[1], $resultado[2]));
        }
        $this -> conexion -> close();
        return $administrador;
    }
}
?>