<?php
//require("logica/Administrador.php");
$nombre="Prueba3";
$apellido="Apellido"; 
$direccion="Direccion"; 
$colonia="Colonia"; 
$ciudad="Ciudad"; 
$estado="Estsado";
$correo="correo"; 
$clave="clave";
$foto="foto";
$telefono="telefono";
$celular="celular";
$rfc="rfc";
$curp="curp"; 
$fechaNacimiento="fechaNacimiento";
$status="status";
$cargo="cargo";
$nuevoAdministrador = new Administrador("", $nombre, $apellido, $direccion, $colonia, $ciudad, $estado, $correo, $clave, $foto, $telefono, $celular, $rfc, $curp, $fechaNacimiento, $status, $cargo);
//$nuevoAdministrador = new Administrador("", "suertudo", "apellido", "direccion","colonia", "ciudad", "estado", "correo", "clave", "foto", "telefono", "celular", "rfc", "curp", "fechaNacimiento", "status", "cargo");
$nuevoAdministrador -> insertar();
$procesado = true;
?>