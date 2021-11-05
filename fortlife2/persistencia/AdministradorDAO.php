<?php
class AdministradorDAO{
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
    public function __construct($pIdAdministrador = "", $pFecha="", $pNombre = "", $pApellido = "", $pDireccion="", $pColonia="", $pCiudad="", $pEstado="", $pCorreo="", $pClave="", $pFoto = "", $pTelefono="", $pCelular="", $prfc="", $pCurp="", $pFechaNacimiento="", $pStatus="", $pCargo=""){
        $this -> idAdministrador = $pIdAdministrador;
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
        $this -> rfc = $prfc;
        $this -> curp = $pCurp;
        $this -> fechaNacimiento = $pFechaNacimiento;
        $this -> status = $pStatus;
        $this -> cargo = $pCargo;
    }
function autenticar($correo, $clave){
    return "SELECT * FROM administrador WHERE correo = '$correo' AND clave = \"" . md5($clave) . "\"";

    //return "select idAdministrador, fecha, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo
    //            from administrador
    //            where correo = \"" . $correo . "\" and clave =\"" . md5($clave) . "\"";
}
function consultar(){
    return "select idAdministrador, fecha, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo
                from administrador
                where idAdministrador = \"" . $this -> idAdministrador . "\"";
}
function consultarTodo(){
    return "select idAdministrador, fecha, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo from administrador";
}
function eliminar(){
    return "delete from administrador
    where idAdministrador = \"" . $this -> idAdministrador . "\""; 
}
function insertar(){
    $clave ="";
    $clave = md5($this-> clave);
    return "insert into administrador ( fecha, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo)
            values (\"" . $this -> fecha . "\",
                    \"" . $this -> nombre . "\",            
                    \"" . $this -> apellido . "\",
                   \"" . $this -> direccion . "\",
                   \"" . $this -> colonia. "\",
                   \"" . $this -> ciudad . "\",
                   \"" . $this -> estado . "\",
                   \"" . $this -> correo . "\",
                   \"" . $clave . "\",
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
            cargo = \"" . $this -> cargo . "\"
            where idAdministrador = \"" . $this -> idAdministrador . "\"";
}
}
?>