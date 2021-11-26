<?php //Crear Agente
include_once("logica/agente.php");
$procesado = false;

$fecha = "";
if(isset($_POST["fecha"])){
    $fecha= $_POST["fecha"]; 
}
$nombre = "";
if(isset($_POST["nombre"])){
    $nombre = $_POST["nombre"];
}
$apellido = "";
if(isset($_POST["apellido"])){
    $apellido = $_POST["apellido"];
}
$direccion = "";
if(isset($_POST["direccion"])){
    $direccion = $_POST["direccion"];
}
$colonia = "";
if(isset($_POST["colonia"])){
    $colonia = $_POST["colonia"];
}
$ciudad = "";
if(isset($_POST["ciudad"])){
    $ciudad = $_POST["ciudad"];
}
$estado = "";
if(isset($_POST["estado"])){
    $estado = $_POST["estado"];
}
$correo = "";
if(isset($_POST["correo"])){
    $correo = $_POST["correo"];
}
$clave = "";
if(isset($_POST["clave"])){
    $clave = $_POST["clave"];
}
$foto = "";
if(isset($_POST["foto"])){
    $foto = $_POST["foto"];
}
$telefono = "";
if(isset($_POST["telefono"])){
    $telefono = $_POST["telefono"];
}
$celular = "";
if(isset($_POST["celular"])){
    $celular = $_POST["celular"];
}
$rfc = "";
if(isset($_POST["rfc"])){
    $rfc = $_POST["rfc"];
}
$curp = "";
if(isset($_POST["curp"])){
    $curp = $_POST["curp"];
}
$fechaNacimiento = "";
if(isset($_POST["fechaNacimiento"])){
    $fechaNacimiento = $_POST["fechaNacimiento"];
}
$status = "";
if(isset($_POST["status"])){
    $status = $_POST["status"];
}
$cargo = "";
if(isset($_POST["cargo"])){
    $cargo = $_POST["cargo"];
}
$fechaAlta = "";
if(isset($_POST["fechaAlta"])){
    $fechaAlta = $_POST["fechaAlta"];
}
$fechaEntrevistaInicial= "";
if(isset($_POST["fechaEntrevistaInicial"])){
    $fechaEntrevistaInicial = $_POST["fechaEntrevistaInicial"];
}
$fechaEntrevistaSeleccion="";
if(isset($_POST["fechaEntrevistaSeleccion"])){
    $fechaEntrevistaSeleccion = $_POST["fechaEntrevistaSeleccion"];
}
$fechaEntrevistaDirector="";
if(isset($_POST["fechaEntrevistaDirector"])){
    $fechaEntrevistaDirector = $_POST["fechaEntrevistaDirector"];
}
$fechaEntrevistaCarrera="";
if(isset($_POST["fechaEntrevistaCarrera"])){
    $fechaEntrevistaCarrera = $_POST["fechaEntrevistaCarrera"];
}
$plaza = "";
if(isset($_POST["plaza"])){
    $plaza = $_POST["plaza"];
}
$claveTemporal = "";
if(isset($_POST["claveTemporal"])){
    $claveTemporal = $_POST["claveTemporal"];
}
$fechaClaveTemporal = "";
if(isset($_POST["fechaClaveTemporal"])){
    $fechaClaveTemporal = $_POST["fechaClaveTemporal"];
}
$clavePermanente = "";
if(isset($_POST["clavePermanente"])){
    $clavePermanente = $_POST["clavePermanente"];
}
$fechaClavePermanente = "";
if(isset($_POST["fechaClavePermanente"])){
    $fechaClavePermanente = $_POST["fechaClavePermanente"];
}
$fechaEscuelaCedula = "";
if(isset($_POST["fechaEscuelaCedula"])){
    $fechaEscuelaCedula = $_POST["fechaEscuelaCedula"];
}
$fechaExamen = "";
if(isset($_POST["fechaExamen"])){
    $fechaExamen = $_POST["fechaExamen"];
}
$cedula = "";
if(isset($_POST["cedula"])){
    $cedula = $_POST["cedula"];
}
$fechaVigenciaCedula = "";
if(isset($_POST["fechaVigenciaCedula"])){
    $fechaVigenciaCedula = $_POST["fechaVigenciaCedula"];
}
$polizaRC = "";
if(isset($_POST["polizaRC"])){
    $polizaRC = $_POST["polizaRC"];
}
$fechaVigenciaPolizaRC = "";
if(isset($_POST["fechaVigenciaPolizaRC"])){
    $fechaVigenciaPolizaRC = $_POST["fechaVigenciaPolizaRC"];
}
$fechaEscuelaComercial = "";
if(isset($_POST["fechaEscuelaComercial"])){
    $fechaEscuelaComercial = $_POST["fechaEscuelaComercial"];
}

if(isset($_POST["insertar"])){
    $persona =new Agente("", $fecha, $nombre, $apellido, $direccion, $colonia, $ciudad, $estado, $correo, $clave, $foto, $telefono, $celular, $rfc, $curp, $fechaNacimiento, $status, $cargo, $fechaAlta, $fechaEntrevistaInicial, $fechaEntrevistaSeleccion, $fechaEntrevistaDirector, $fechaEntrevistaCarrera, $plaza, $claveTemporal, $fechaClaveTemporal, $clavePermanente, $fechaClavePermanente, $fechaEscuelaCedula, $fechaExamen, $cedula, $fechaVigenciaCedula, $polizaRC, $fechaVigenciaPolizaRC, $fechaEscuelaComercial);
    var_dump($persona);
    $persona -> insertar();
    $procesado = true;
} 
?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="card" >
                <div class="card-header">
                    <h4 class="card-title"><i class="fas fa-person-booth"></i> CREAR Agente</h4>
                    <div class="card-body" >
                        <?php if($procesado){ ?>
                        <div class="alert alert-success" >Datos Ingresados
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times; </span>
                            </button>
                        </div>
                        <?php } ?>
                        <form action=""  method="POST">
                            <div class="card-header">
                                <legend>INFORMACION PERSONAL</legend>
                                <div class="row g-3">
                                    <div class="form-group">
                                        <label for="fecha">Fecha</label>
                                        <input type="date" class="form-control" name="fecha" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                    </div>
                                    <div class="form-group" class="col-sm-7">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" value="-">
                                    </div>
                                    <div class="form-group">
                                        <label for="apellido">Apellido</label>
                                        <input type="text" class="form-control" name="apellido" value="-">
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="form-group">
                                        <label for="direccion">Direccion</label>
                                        <input type="text" class="form-control" name="direccion" value="-">
                                    </div>
                                    <div class="form-group">
                                        <label for="colonia">Colonia</label>
                                        <input type="text" class="form-control" name="colonia" value="-">
                                    </div>
                                    <div class="form-group">
                                        <label for="ciudad">Ciudad</label>
                                        <input type="text" class="form-control" name="ciudad" value="-">
                                    </div>
                                    <div class="form-group">
                                        <label for="estado">Estado</label>
                                        <input type="text" class="form-control" name="estado" value="-">
                                    </div>
                                </div>
                                <div class="row g-4">
                                    <div class="form-group">
                                        <label for="correo">Correo</label>
                                        <input type="text" class="form-control" name="correo" value="-">
                                    </div>
                                    <div class="form-group">
                                        <label for="clave">Clave</label>
                                        <input type="text" class="form-control" name="clave" value="123456">
                                    </div>
                                    <div class="form-group">
                                        <label for="foto">Foto</label>
                                        <input type="text" class="form-control" name="foto" value="0">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono">Telefono</label>
                                        <input type="text" class="form-control" name="telefono" value="0">
                                    </div>
                                    <div class="form-group">
                                        <label for="celular">Celular</label>
                                        <input type="text" class="form-control" name="celular" value="0">
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group">
                                        <label for="rfc">Rfc</label>
                                        <input type="text" class="form-control" name="rfc" value="-">
                                    </div>
                                    <div class="form-group">
                                        <label for="curp">Curp</label>
                                        <input type="text" class="form-control" name="curp" value="-">
                                    </div>
                                    <div class="form-group">
                                        <label for="fechaNacimiento">Fecha de Nacimiento</label>
                                        <input type="date" class="form-control" name="fechaNacimiento" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                    </div>
                                    </div>


                                    <div class="form-check">
                                        <?php  $valor=""; if($status == "1"){$valor="on";} ?>
                                        <input class="form-check-input" type="checkbox" id="status" name="status" value="1" checked="">
                                        <label class="form-check-label" for="gridCheck1">
                                        Status
                                        </label>
                                    </div>

                                        <label for="cargo" class="form-label">Cargo</label>
                                        <select class="form-select" id="cargo" name="cargo">
                                        <option  value="Agente">Agente</option> 
                                        <option value="Agente">Agente</option> 
                                        </select>

                                </div>
                            </div>
                            <div class="card-header">
                                <legend>ETAPAS DEL AGENTE</legend>
                                <div class="informacionPersonal">
                                <div class="row g-4">
                                <div class="form-group">
                                            <label for="fechaAlta">Fecha Inicial</label>
                                            <input id="fechaAlta" class="form-control" type="date" name="fechaAlta" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="fechaEntrevistaInicial">Fecha de Entrevista Inicial</label>
                                            <input id="fechaEntrevistaInicial" class="form-control" type="date" name="fechaEntrevistaInicial" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>

                                        <div class="form-group"> 
                                            <label for="fechaEntrevistaSeleccion">Fecha de Entrevista de Seleccion</label>
                                            <input id="fechaEntrevistaSeleccion" class="form-control" type="date" name="fechaEntrevistaSeleccion" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>


                                        <div class="form-group">
                                            <label for="fechaEntrevistaDirector">Fecha de Entrevista con Director</label>
                                            <input id="fechaEntrevistaDirector" class="form-control" type="date" name="fechaEntrevistaDirector" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">

                                        </div>

                                        <div class="form-group">
                                            <label for="fechaEntrevistaCarrera">Fecha de Entrevista de carrera</label>
                                            <input id="fechaEntrevistaCarrera" class="form-control" type="date" name="fechaEntrevistaCarrera" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <legend>ETAPAS DEL AGENTE 2</legend>
                                <div class="informacionPersonal ">
                                    <div class="row g-5">
                                        <div  class="form-group">
                                                <label for="plaza">Plaza:</label>
                                                <select id="plaza" name="plaza">
                                                    <option  value="LEON">LEON</option> 
                                                    <option  value="PUEBLA">PUEBLA</option> 
                                                    <option  value="CDMX">CDMX</option> 
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="claveTemporal">Clave Temporal:</label>
                                            <input type="text" class="form-control" name="claveTemporal" id="claveTemporal" value="00" placeholder="Clave Temporal ">
                                        </div>
                                        <div class="form-group">
                                            <label for="fechaClaveTemporal">Fecha de clave</label>
                                            <input id="fechaClaveTemporal" class="form-control" type="date" name="fechaClaveTemporal" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>

                                        <div class="form-group">
                                            <label for="clavePermanente">Clave Permanente:</label>
                                            <input type="text" class="form-control" name="clavePermanente" id="clavePermanente " value="-" >
                                        </div>
                                        <div class="form-group">
                                            <label for="fechaClavePermanente">Fecha de clave Permanente</label>
                                            <input id="fechaClavePermanente" class="form-control" type="date" name="fechaClavePermanente" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="fechaEscuelaCedula">Fecha de Escuela Cedula</label>
                                            <input id="fechaEscuelaCedula" class="form-control" type="date" name="fechaEscuelaCedula" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="fechaExamen">Fecha para Examen</label>
                                            <input id="fechaExamen" class="form-control" type="date" name="fechaExamen" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header">
                                <legend>AGENTE EXPERTO</legend>
                                <div class="informacionPersonal ">
                                <div class="row g-4">
                                        <div class="form-group">
                                            <label for="cedula">Cedula:</label>
                                            <input type="text" class="form-control" name="cedula" id="cedula" value="-">
                                        </div>
                                        <div class="form-group">
                                            <label for="fechaVigenciaCedula">Fecha Vigencia</label>
                                            <input id="fechaVigenciaCedula" class="form-control" type="date" name="fechaVigenciaCedula" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="polizaRC">Poliza RC:</label>
                                            <input type="text" class="form-control" name="polizaRC" id="polizaRC" value="-">
                                        </div>
                                        <div class="form-group">
                                            <label for="fechaVigenciaPolizaRC">Fecha Vigencia Poliza RC</label>
                                            <input id="fechaVigenciaPolizaRC" class="form-control" type="date" name="fechaVigenciaPolizaRC" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="fechaescuelaComercial">Fecha EscuelaComercial</label>
                                            <input id="fechaescuelaComercial" class="form-control" type="date" name="fechaEscuelaComercial" value="<?php $fecha=date("Y-m-d"); echo $fecha; ?>">
                                        </div>
                                    </div> 
                            </div>                
                            <button type="submit" class="btn btn-primary" name="insertar">Crear</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>