<?php
class AdministradorDAO{
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
    public function __construct($pIdAdministrador = "", $pNombre = "", $pApellido = "", $pDireccion="", $pColonia="", $pCiudad="", $pEstado="", $pCorreo="", $pClave="", $pFoto = "", $pTelefono="", $pCelular="", $prfc="", $pCurp="", $pFechaNacimiento="", $pStatus="", $pCargo=""){
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
        $this -> rfc = $prfc;
        $this -> curp = $pCurp;
        $this -> fechaNacimiento = $pFechaNacimiento;
        $this -> status = $pStatus;
        $this -> cargo = $pCargo;
    }
function autenticar($correo, $clave){
    return "select idAdministrador, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo
                from administrador
                where correo = \"" . $correo . "\" and clave =\"" . md5($clave) . "\"";
}
function consultar(){
    return "select idAdministrador, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo
                from administrador
                where idAdministrador = \"" . $this -> idAdministrador . "\"";
}
function consultarTodo(){
    return "select idAdministrador, nombre, apellido from administrador";
}
}
?>