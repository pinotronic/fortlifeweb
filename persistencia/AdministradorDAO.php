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
function eliminar(){
    return "delete from Producto
    where idProducto = \"" . $this -> idAdministrador . "\""; 
}
function insertar(){
    return "insert into administrador(nombre, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo)
            values (\"" . $this -> nombre . "\",
                   \"" . $this -> direccion . "\",
                   \"" . $this -> colonia. "\",
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
                   \"" . $this -> cargo . "\")";
}

function actualizar(){
    return "update administrador set
            nombre = \"" . $this -> nombre . "\",
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
            cargo = \"" . $this -> cargo . "\"
            where idProducto = \"" . $this -> idAdministrador . "\"";
}
}
?>