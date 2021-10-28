<?php //Crear Persona Nueva
$procesado = false;
$nombre ="";
$cantidad="";
$precio="";
if(isset($_POST["nombre"])){
    $nombre = $POST["nombre"];
}
$cantidad="";
if(isset($_POST["cantidad"])){
    $cantidad = $_POST["cantidad"];
    }
$precio="";
if(isset($_POST["precio"])){
    $precio = $_POST["precio"];
}    
if(isset($_POST["insertar"])){
    $nuevoProducto = new Producto("", $nombre, $cantidad, $precio);
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
        