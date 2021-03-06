<?php // Crear Agente
include_once("../logica/Agente.php");
$procesado = false;
//var_dump($_GET);
$idPersona = $_GET["idAdministrador"];
$actPersona = new Agente($idPersona);
$actPersona -> consultarTodo($idPersona);
//var_dump($actPersona);
$nombre = "";

$idAdministrador = "";
if(isset($_POST["idAdministrador"])){
    $idAdministrador = $_POST["idAdministrador"];
}
$fechaAlta = "";
if(isset($_POST["fechaAlta"])){
    $fechaAlta = $_POST["fechaAlta"];
}
$fechaEntrevistaInicial = "";
if(isset($_POST["fechaEntrevistaInicial"])){
    $fechaEntrevistaInicial = $_POST["fechaEntrevistaInicial"];
}
$fechaEntrevistaSeleccion = "";
if(isset($_POST["fechaEntrevistaSeleccion"])){
    $fechaEntrevistaSeleccion = $_POST["fechaEntrevistaSeleccion"];
}
$fechaEntrevistaDirector = "";
if(isset($_POST["fechaEntrevistaDirector"])){
    $fechaEntrevistaDirector = $_POST["fechaEntrevistaDirector"];
}
$fechaEntrevistaCarrera = "";
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
$fechaVigenciaRC = "";
if(isset($_POST["fechaVigenciaPolizaRC"])){
    $fechaVigenciaRC = $_POST["fechaVigenciaPolizaRC"];
}
$fechaEscuelaComercial = "";
if(isset($_POST["fechaEscuelaComercial"])){
    $fechaEscuelaComercial = $_POST["fechaEscuelaComercial"];
}

if(isset($_POST["actualizar"])){
    $agente = new Agente("", $idAdministrador, $fechaAlta, $fechaEntrevistaInicial, $fechaEntrevistaSeleccion, $fechaEntrevistaDirector, $fechaEntrevistaCarrera, $plaza, $claveTemporal, $fechaClaveTemporal, $clavePermanente, $fechaClavePermanente, $fechaEscuelaCedula, $fechaExamen, $cedula, $fechaVigenciaCedula, $polizaRC, $fechaVigenciaRC, $fechaEscuelaComercial);
    var_dump($agente);
    $agente -> insertar();
    $procesado = true;
}
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">CREAR AGENTE</h4>
        </div>
        <div class="card-body">
            <?php if($procesado){ ?>
            <div class="alert alert-success" >Datos Ingresados
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times; </span>
            </button>
            </div>
        <?php }
        $idAgente = ($actPersona -> getIdAgente());
        $idAdministrador = ($actPersona -> getIdAdministrador());
        $fechaAlta = ($actPersona -> getFechaAlta());
        $fechaEntrevistaInicial = ($actPersona -> getFechaEntrevistaInicial());   
        $fechaEntrevistaSeleccion = ($actPersona -> getFechaEntrevistaSeleccion());
        $fechaEntrevistaDirector = ($actPersona -> getFechaEntrevistaDirector());
        $fechaEntrevistaCarrera = ($actPersona -> getFechaEntrevistaCarrera());
        $plaza = ($actPersona -> getPlaza()); 
        $claveTemporal = ($actPersona -> getClaveTemporal());
        $fechaClaveTemporal = ($actPersona -> getFechaClaveTemporal());
        $clavePermanente = ($actPersona -> getClavePermanente());
        $fechaClavePermanente = ($actPersona -> getClavePermanente());
        $fechaEscuelaCedula=($actPersona -> getFechaEscuelaCedula());
        $fechaExamen = ($actPersona -> getFechaExamen());
        $cedula = ($actPersona -> getCedula());
        $fechaVigenciaCedula = ($actPersona -> getFechaVigenciaCedula());
        $polizaRC = ($actPersona -> getPolizaRC());
        $fechaVigenciaPolizaRC = ($actPersona -> getFechaVigenciaPolizaRC());
        $fechaEscuelaComercial = ($actPersona -> getFechaEscuelaComercial());
        $IdAdministrador = ($actPersona -> getIdAdministrador());
        ?>

        <form id="form" action="" class="bootstrap-form needs-validation" method="POST">
        <div class="form-row">
        <legend>ETAPAS DEL AGENTE</legend>
            <div class="form-row">

                <div class="form-group">
                    <label for="idAdministrador">id Administrador</label>
                    <input type="text" style="width : 80px" class="form-control" name="idAdministrador" value="<?php echo $idPersona; ?>">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" style="width : 400px" class="form-control" name="nombre" value="<?php //echo $nombre, " ", $apellido; ?>">
                </div>
                <div class="form-group">
                    <label for="fechaAlta">fecha de Alta</label>
                    <input type="date" class="form-control" name="fechaAlta" value="">
                </div>
            </div>
            <legend>ETAPAS DEL AGENTE</legend>
            <div class="form-row">
                <div class="form-group">
                    <label for="fechaEntrevistaInicial">fecha de Entrevista Inicial</label>
                    <input type="date" class="form-control" name="fechaEntrevistaInicial" value="">
                </div>
                <div class="form-group">
                    <label for="fechaEntrevistaSeleccion">fecha de Entrevista Seleccion</label>
                    <input type="date" class="form-control" name="fechaEntrevistaSeleccion" value="">
                </div>
                <div class="form-group">
                    <label for="fechaEntrevistaDirector">fechaEntrevistaDirector</label>
                    <input type="date" class="form-control" name="fechaEntrevistaDirector" value="">
                </div>
                <div class="form-group">
                    <label for="fechaEntrevistaCarrera">fecha de Entrevista Carrera</label>
                    <input type="date" class="form-control" name="fechaEntrevistaCarrera" value="">
                </div>
            </div>
        <legend>ETAPAS DEL AGENTE</legend>
            <div class="form-row">
                <div class="form-group">
                    <label for="plaza">plaza</label>
                    <select id="plaza" name="plaza">
                    <option  value="Leon">Leon</option> 
                    <option value="Puebla">Puebla</option> 
                    <option value="CDMX">CDMX</option> 
                    </select>
                </div>
                <div class="form-group">
                    <label for="claveTemporal">claveTemporal</label>
                    <input type="text" class="form-control" name="claveTemporal" value="">
                </div>
                <div class="form-group">
                    <label for="fechaClaveTemporal">fechaClaveTemporal</label>
                    <input type="date" class="form-control" name="fechaClaveTemporal" value="">
                </div>
                <div class="form-group">
                    <label for="clavePermanente">clavePermanente</label>
                    <input type="text" class="form-control" name="clavePermanente" value="">
                </div>
                <div class="form-group">
                    <label for="fechaClavePermanente">fechaClavePermanente</label>
                    <input type="date" class="form-control" name="fechaClavePermanente" value="">
                </div>

                <div class="form-row">
                <div class="form-group">
                    <label for="fechaEscuelaCedula">fechaEscuelaCedula</label>
                    <input type="date" class="form-control" name="fechaEscuelaCedula" value="">
                </div>
                <div class="form-group">
                    <label for="fechaExamen">fechaExamen</label>
                    <input type="date" class="form-control" name="fechaExamen" value="">
                </div>
                </div>
        <legend>AGENTE EXPERTO</legend>
            <div class="form-row">
                <div class="form-group">
                    <label for="cedula">cedula</label>
                    <input type="text" class="form-control" name="cedula" value="">
                </div>
                <div class="form-group">
                    <label for="fechaVigenciaCedula">fechaVigenciaCedula</label>
                    <input type="date" class="form-control" name="fechaVigenciaCedula" value="">
                </div>

                <div class="form-group">
                    <label for="polizaRC">polizaRC</label>
                    <input type="text" class="form-control" name="polizaRC" value="">
                </div>

                <div class="form-group">
                    <label for="fechaVigenciaPolizaRC">fecha Vigencia RC</label>
                    <input type="date" class="form-control" name="fechaVigenciaPolizaRC" value="">
                </div>

                <div class="form-group">
                    <label for="fechaEscuelaComercial">fechaEscuelaComercial</label>
                    <input type="date" class="form-control" name="fechaEscuelaComercial" value="">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-pinfo" name="insertar">Crear</button>
            </div>
        </form>

        </div>
    </div>
</div>

