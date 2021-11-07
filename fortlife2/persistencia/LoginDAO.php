<?php
class LoginDAO{
    public $idPersona;
    public $correo;
    public $clave;
    public $idAgente;
    public $idAdministrador;
    public $status;

    public function __construct($pIdPersona, $pCorreo, $pClave, $pIdAgente, $pIdAdministrador, $pStatus){
        $this->idPersona = $pIdPersona;
        $this->correo = $pCorreo;
        $this->clave = $pClave;
        $this->idAgente = $pIdAgente;
        $this->idAdministrador = $pIdAdministrador;
        $this->status = $pStatus;
    }
    function autenticar($correo, $clave){
        return "SELECT * FROM loginn WHERE correo = '$correo' AND clave = \"" . md5($clave) . "\"";
    
        //return "select idAdministrador, fecha, nombre, apellido, direccion, colonia, ciudad, estado, correo, clave, foto, telefono, celular, rfc, curp, fechaNacimiento, status, cargo
        //            from administrador
        //            where correo = \"" . $correo . "\" and clave =\"" . md5($clave) . "\"";
    }
}
?>