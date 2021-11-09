<?php
class LoginDAO{
    public $idPersona;
    public $correo;
    public $clave;
    public $idAgente;
    public $idAdministrador;
    public $status;

    public function __construct($pIdPersona="", $pCorreo="", $pClave="", $pIdAgente="", $pIdAdministrador="", $pStatus=""){
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
    #buscar en base de datos por id agente
    function buscarIdAgente($idAgente){
        return "SELECT * FROM loginn WHERE idAgente = '$idAgente'";
    }
    function buscarIdAdministrador($idAdministrador){
        return "SELECT * FROM loginn WHERE idAdministrador = '$idAdministrador'";
    }
    function insertar(){
        $clave ="";
        $clave = md5($this-> clave);
        return "insert into loginn ( correo, clave, idAgente, idAdministrador, status)
                values (\"" . $this -> correo . "\",
                       \"" . $clave . "\",
                       \"" . $this -> idAgente . "\",
                       \"" . $this -> idAdministrador . "\",
                       \"" . $this -> status . "\")";
    }
}
?>