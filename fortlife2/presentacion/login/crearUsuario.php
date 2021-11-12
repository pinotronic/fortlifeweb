<?php // Crear Usuario 
include_once("logica/login.php");
$procesado = false;
if(isset($_POST["correo"])){
    $correo= $_POST["correo"];
}
if(isset($_POST["clave"])){
    $clave= $_POST["clave"];
}
if(isset($_POST["insertar"])){

        $idAgente="0";
        $idAdministrador="0";
        $status="1";
        $usuario = new Login("", $correo, $clave, $idAgente, $idAdministrador, $status);
        $usuario -> insertar();
        $procesado = true;
    }
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><strong> <i class="fas fa-person-booth"></i> Crear Usuario</strong></h4>
                </div>
                <div class="card-body">
                    <?php if($procesado){ ?>
                        <div class="alert alert-success" >Datos Ingresados
                            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                <span aria-hidden="true">&times; </span>
                            </button>
                        </div>
                    <?php } ?>
                    <form id="form" method="post" action="" class="bootstrap-form needs-validation">
                        <div class="form-group">
                            <div class="input-gorup">
                                <input type="email" class="form-control" name="correo" placeholder="Correo" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="clave" placeholder="Clave" required />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="claveConfirmar" placeholder="Confirmar Clave" required />
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info" name="insertar">Crear</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>