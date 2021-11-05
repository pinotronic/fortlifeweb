<?php
require("logica/Agente.php");
//require("persistencia/Conexion.php");
$fechaAlta=""; 
$fechaEntrevistaInicial="";   
$fechaEntrevistaSeleccion=""; 
$fechaEntrevistaDirector=""; 
$fechaEntrevistaCarrera=""; 
$plaza=""; 
$claveTemporal=""; 
$fechaClaveTemporal=""; 
$clavePermanente=""; 
$fechaClavePermanente=""; 
$cedula=""; 
$fechaVigenciaCedula=""; 
$polizaRC=""; 
$fechaVigenciaPolizaRC=""; 
$fechaEscuelaComercial=""; 
$IdAdministrador=""; 
$nuevoAgente = new Agente();
$nuevoAgente->setFechaAlta($fechaAlta);
$this -> conexion2 -> abrir();
$this -> conexion2 -> ejecutar($this -> agenteDao -> consultarAgente());
$resultado = $this -> conexion2 -> extraer();
var_dump($resultado);
    ?>