<?php
class registroSeguimientoDAO{
    public $idSeguimiento;
    public $fechaInteraccion;
    public $idAgente;
    public $registro;
    public $idAdministrador;

    public function __construct($pidSeguimiento ="", $pfechaInteraccion="", $pidAgente="", $pregistro="", $pidAdministrador=""){
        $this -> idSeguimiento = $pidSeguimiento;
        $this -> fechaInteraccion = $pfechaInteraccion;
        $this -> idAgente = $pidAgente;
        $this -> registro = $pregistro;
        $this -> idAdministrador = $pidAdministrador;
    }
    function consultarTodo(){
        return "select idSeguimiento, fechaInteraccion, idAgente, registro, idAdministrador
                    from crm
                    where idAgente = \"" . $this -> idAgente . "\"";
    }
    function insertar(){
        return "insert into crm (fechaInteraccion, idAgente, registro, idAdministrador)
                    values (\"" . $this -> fechaInteraccion . "\", \"" . $this -> idAgente . "\", \"" . $this -> registro . "\", \"" . $this -> idAdministrador . "\")";
    }
}
?>