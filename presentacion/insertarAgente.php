<?php //Crear Persona Nueva
$procesado = false;
$nombre;
$apellido;
$direccion;
$colonia;
$ciudad;
$estado;
$correo;
$clave;
$foto;
$telefono;
$celular;
$rfc;
$curp;
$fechaNacimiento;
$status;
$cargo;

if(isset($_POST["nombre"])){
    $nombre = $POST["nombre"];
}
if(isset($_POST["apellido"])){
    $apellido = $POST["apellido"];
}
if(isset($_POST["direccion"])){
    $direccion = $POST["direccion"];
}
if(isset($_POST["colonia"])){
    $colonia = $POST["colonia"];
}
if(isset($_POST["ciudad"])){
    $ciudad = $POST["ciudad"];
}
if(isset($_POST["estado"])){
    $estado = $POST["estado"];
}
if(isset($_POST["correo"])){
    $correo = $POST["correo"];
}
if(isset($_POST["clave"])){
    $clave = $POST["clave"];
}
if(isset($_POST["foto"])){
    $foto = $POST["foto"];
}
if(isset($_POST["telefono"])){
    $telefono = $POST["telefono"];
}
if(isset($_POST["celular"])){
    $celular = $POST["celular"];
}
if(isset($_POST["rfc"])){
    $rfc = $POST["rfc"];
}
if(isset($_POST["curp"])){
    $curp = $POST["curp"];
}
if(isset($_POST["fechaNacimiento"])){
    $fechaNacimiento = $POST["fechaNacimiento"];
}
if(isset($_POST["status"])){
    $status = $POST["status"];
}
if(isset($_POST["cargo"])){
    $cargo = $POST["cargo"];
}
  
if(isset($_POST["insertar"])){
    $nuevoProducto = new Producto("", $nombre, $direccion, $colonia, $ciudad, $estado, $correo, $clave, $foto, $telefono, $celular, $rfc, $curp, $fechaNacimiento, $status, $cargo);
    $nuevoProducto -> insertar();
    $procesado = true;
}
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Crear Agente</h4>
        </div>
    <div class = "card-body">
        <?php if($procesado){ ?>
            
        <div class="alert alert-success" >Datos Ingresados
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"> &times;</span>
        </button>
        </div>
        <?php }?>
        
        <form id="form" method="post" action="index.php?pid=<?php echo "presentacion/insertarProducto" ?>"class="bootstrap-form needs-validation"> 
        <div class="form-group">
            <label>Nombre*</label>
            <input type="text" class="form-control" name="nombre" value="". required />
        </div>
        <div class="form-group">
            <label>Apellido*</label>
            <input type="text" class="form-control" name="apellido" value="". required />
        </div>
        <div class="form-group">
            <label>Direccion*</label>
            <input type="text" class="form-control" name="direccion" value="" required />
        </div>
        <div class="form-group">
            <label>Colonia*</label>
            <input type="text" class="form-control" name="colonia" value="" required />
        </div>
        <div class="form-group">
            <label>Ciudad*</label>
            <input type="text" class="form-control" name="ciudad" value="" required />
        </div>
        <div class="form-group">
            <label>Estado*</label>
            <input type="text" class="form-control" name="estado" value="" required />
        </div>
                <button type="submit" class="btn btn-info" name="insertar">Crear</button>
                </form>
                </div>
                </div>
                </div>
        