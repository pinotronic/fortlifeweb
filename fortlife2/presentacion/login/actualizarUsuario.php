<?php //Objetivo: Editar / Actualizar Admon
$procesado = false;
$Autorizado=false;
$valorPermiso="";
$idPersona = $_GET["idUsuario"];
$actPersona = new Login($idPersona);
$actPersona -> consultar();
$login = new Login();
$Autorizado = $login -> verificarPermiso($idPersona);
$correo = "";
if(isset($_POST["correo"])){
    $correo = $_POST["correo"];
}
$clave = "";
if(isset($_POST["clave"])){
    $clave = $_POST["clave"];
}
$idAgente = "";
if(isset($_POST["idAgente"])){
    $idAgente = $_POST["idAgente"];
}
$idAdministrador = "";
if(isset($_POST["idAdministrador"])){
    $idAdministrador = $_POST["idAdministrador"];
}
$status = "";
if(isset($_POST["status"])){
    $status = $_POST["status"];
}
if(isset($_POST["actualizar"])) {
    $usuario= new Login($idUsuario, $correo, $clave, $idAgente, $idAdministrador, $status);
    $usuario->actualizar();
    $procesado = true;
}

?>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <h4 class="card-title">Editar Administrador</h4>
        </div>

        <div class="card-body">
            <?php if($procesado){ ?>
            <div class="alert alert-success" >Datos Ingresados
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times; </span>
            </button>
            </div>
        <?php } 
        $correo = ($actPersona -> getCorreo());
        $clave = ($actPersona -> getClave());
        $idAgente = ($actPersona -> getIdAgente());
        $idAdministrador = ($actPersona -> getIdAdministrador());
        $status = ($actPersona -> getStatus());
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']."?idUsuario=".$idPersona; ?>" method="POST">
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" value="<?php echo $correo; ?>" required>
            </div>
            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="text" class="form-control" id="clave" name="clave" value="" required>
            </div>
            <div class="form-group">
                <label for="idAgente">id Agente</label>
                <input type="text" class="form-control" id="idAgente" name="idAgente" value="<?php echo $idAgente; ?>" required>
            </div>
            <div class="form-group">
                <label for="idAdministrador">id Administrador</label>
                <input type="text" class="form-control" id="idAdministrador" name="idAdministrador" value="<?php echo $idAdministrador; ?>" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input type="text" class="form-control" id="status" name="status" value="<?php echo $status; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
        </form>
        </div>
    </div>
</div>
<?php
// Path: presentacion\login\actualizarUsuario.php
?>

