<?php //Crear Persona
include_once("logica/Administrador.php");
$procesado = false;
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
if(isset($_POST["insertar"])){
// verificar que carge la clase
    //if(class_exists("Administrador")){
    //    echo "Encontro La clase";
    //    $persona = new Administrador();
    //    $persona->setNombre($nombre);
    //    $persona->setApellido($apellido);
    //    $persona->setDireccion($direccion);
    //    $persona->setColonia($colonia);
    //    $persona->setCiudad($ciudad);
    //    $persona->setEstado($estado);
    //    $persona->setCorreo($correo);
    //    $persona->setClave($clave);
    //    $persona->setFoto($foto);
    //    $persona->setTelefono($telefono);
    //    $persona->setCelular($celular);
   //     $persona->setRfc($rfc);
    //    $persona->setCurp($curp);
    //    $persona->setFechaNacimiento($fechaNacimiento);
    //    $persona->setStatus($status);
    //    $persona->setCargo($cargo);
     //   $procesado = $persona->insertar();
    //}else{
    //    echo "No encontro la clase";
    //}
    $persona = new Administrador("", $nombre, $apellido, $direccion, $colonia, $ciudad, $estado, $correo, $clave, $foto, $telefono, $celular, $rfc, $curp, $fechaNacimiento, $status, $cargo);
    $persona -> insertar();
    $procesado = true;
}
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">CREAR PERSONA</h4>
        </div>
        <div class="card-body">
            <?php if($procesado){ ?>
            <div class="alert alert-success" >Datos Ingresados
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times; </span>
            </button>
            </div>
        <?php } ?>
        <form id="form" action="" class="bootstrap-form needs-validation" method="POST">
            <div class="form-row">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="">
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" name="direccion" value="">
                </div>
                <div class="form-group">
                    <label for="colonia">Colonia</label>
                    <input type="text" class="form-control" name="colonia" value="">
                </div>
                <div class="form-group">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" name="ciudad" value="">
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" name="estado" value="">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" name="correo" value="">
                </div>
                <div class="form-group">
                    <label for="clave">Clave</label>
                    <input type="text" class="form-control" name="clave" value="">
                </div>
                <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="text" class="form-control" name="foto" value="">
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" name="telefono" value="">
                </div>
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input type="text" class="form-control" name="celular" value="">
                </div>
                </div>
                <div class="form-row">
                <div class="form-group">
                    <label for="rfc">Rfc</label>
                    <input type="text" class="form-control" name="rfc" value="">
                </div>
                <div class="form-group">
                    <label for="curp">Curp</label>
                    <input type="text" class="form-control" name="curp" value="">
                </div>
                <div class="form-group">
                    <label for="fechaNacimiento">Fecha de Nacimiento</label>
                    <input type="text" class="form-control" name="fechaNacimiento" value="">
                </div>
                </div>
                <div class="form-row">

                <div class="form-check">
                    <?php  $valor=""; if($status == "1"){$valor="on";} ?>
                    <input class="form-check-input" type="checkbox" id="status" name="status" value="1" checked="">
                    <label class="form-check-label" for="gridCheck1">
                    Status
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
                <button type="submit" class="btn btn-pinfo" name="insertar">Crear</button>
        </form>

        </div>
    </div>
</div>
