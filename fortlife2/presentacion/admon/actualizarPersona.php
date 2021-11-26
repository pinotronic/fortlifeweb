<?php //Objetivo: Editar / Actualizar Admon

$procesado = false;
$Autorizado=false;
$valorPermiso="";
$idPersona = $_GET["idAdministrador"];
$actPersona = new Administrador($idPersona);
$actPersona -> consultar();
$login = new Login();
$Autorizado = $login -> verificarPermiso($idPersona);
$nombre = "";

$fecha = date("Y-m-d");
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
if(isset($_POST["actualizar"])){

    if($status == "checked"){
        $status = "1";}
    $administrador = new Administrador($idPersona, $fecha, $nombre, $apellido, $direccion, $colonia, $ciudad, $estado, $correo, $clave, $foto, $telefono, $celular, $rfc, $curp, $fechaNacimiento, $status, $cargo);
    $administrador -> actualizar();
    if( $Autorizado != true && $valorPermiso = "checked"){
        $idAgente="";
        $idAdministrador=$idPersona;
        $login = new Login("", $correo, $clave, $idAgente, $idAdministrador, $status);
        $login -> insertar();
    }
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

        $nombre = ($actPersona -> getNombre());
        $apellido = ($actPersona -> getApellido());
        $direccion = ($actPersona -> getDireccion());
        $colonia = ($actPersona -> getColonia());
        $ciudad = ($actPersona -> getCiudad());
        $estado = ($actPersona -> getEstado());
        $correo = ($actPersona -> getCorreo());
        $clave = ($actPersona -> getClave());
        $foto = ($actPersona -> getFoto());
        $telefono = ($actPersona -> getTelefono());
        $celular = ($actPersona -> getCelular());
        $rfc = ($actPersona -> getRfc());
        $curp = ($actPersona -> getCurp());
        $fechaNacimiento = ($actPersona -> getFechaNacimiento());
        $status = ($actPersona -> getStatus());
        $cargo = ($actPersona -> getCargo());
        ?>
        <form action="" method="POST">
            <div class="form-row">
            <div class="form-group">
                    <label for="idAdministrador">Id</label>
                    <input type="text" class="form-control" name="idAdministrador" value="<?php echo $idPersona; ?>">
                </div>
            <div class="form-group">
                    <label for="fecha">Fecha</label>
                    <input type="text" class="form-control" name="fecha" value="<?php echo $fecha; ?>">
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="<?php echo $apellido; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="<?php echo $direccion; ?>">
                </div>
                <div class="form-group">
                    <label for="colonia">Colonia</label>
                    <input type="text" class="form-control" name="colonia" value="<?php echo $colonia; ?>">
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" value="<?php echo $ciudad; ?>">
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" value="<?php echo $estado; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" name="correo" value="<?php echo $correo; ?>">
                </div>
                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input type="text" class="form-control" name="clave" value="<?php echo $clave; ?>">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="text" class="form-control" name="foto" value="<?php echo $foto; ?>">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="telefono" value="<?php echo $telefono; ?>">
                </div>
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="text" class="form-control" name="celular" value="<?php echo $celular; ?>">
                </div>
                </div>
                <div class="form-row">
                <div class="form-group">
                    <label for="rfc">Rfc</label>
                    <input type="text" class="form-control" name="rfc" value="<?php echo $rfc; ?>">
                </div>
                <div class="form-group">
                    <label for="curp">Curp</label>
                    <input type="text" class="form-control" name="curp" value="<?php echo $curp; ?>">
                </div>
                <div class="form-group">
                    <label for="fechaNacimiento">Fecha de Nacimiento</label>
                    <input type="text" class="form-control" name="fechaNacimiento" value="<?php echo $fechaNacimiento; ?>">
                </div>
                </div>
                <div class="form-row">

                <div class="form-check">
                    <?php  $valor=""; if($status == "1"){$valor="checked";} ?>
                    <input class="form-check-input" type="checkbox" id="status" name="status" value="<?php echo $valor; ?>"<?php echo $valor; ?>>
                    
                    <label class="form-check-label" for="gridCheck1">
                    Status
                    </label>
                </div>
                <div class="form-check">
                    <?php  $valorPermiso=""; if($Autorizado == "true"){$valorPermiso="checked";}?>
                    <input class="form-check-input" type="checkbox" id="permiso" name="permiso" value="<?php echo $valorPermiso; ?>" <?php echo $valorPermiso; ?>>
                    <label class="form-check-label" for="gridCheck1">
                    Permiso
                    </label>
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <select id="cargo" name="cargo">
                    <option  value="Administrador">Administrador</option> 
                    <option value="Agente">Agente</option> 
                    </select>
                </div>
                </div>
                <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>

        </form>

        </div>
    </div>
</div>
