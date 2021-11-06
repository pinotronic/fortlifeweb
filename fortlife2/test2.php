<?php
//require("logica/Agente.php");
require("persistencia/Conexion.php");
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
$IdAdministrador="3"; 

# conectar a la base de datos y buscar por idAdministrador
$conexion = new Conexion();
$conexion->abrir();
$sql = "SELECT * FROM agente WHERE IdAdministrador='$IdAdministrador'";
$resultado = $conexion->ejecutar($sql);
$fila = $conexion->extraer($resultado);

var_dump($fila);