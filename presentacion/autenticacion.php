<?php // Autentifica 
$errorAutenticacion = false;
$errorHabilitacion = false;
if(isset($_POST["autenticar"])){
    if(isset($_POST["correo"]) && isset($_POST["clave"])){
        $correo = $_POST["correo"];
        $clave = $_POST["clave"];
        $administrador = new Administrador();
        if($administrador -> autenticar($correo, $clave)){
            if($administrador -> getStatus() == 1){
                $_SESSION["id"] = $administrador -> getIdAdministrador();
                $_SESSION["actor"]="Administrador";
                echo "<script>location.href = \"index.php?pid=presentacion/consultarAgente\"</script>";
            }else{
                $errorHabilitacion =true;
            }
        }
        $errorAutenticacion=true;
    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4><strong>Autenticar</strong></h4>
                </div>
                <div class="card-body">
                    <form id="form" method="post" action="index.php" class="bootstrap-form needs-validation">
                        <div class="form-group">
                            <div class="input-gorup">
                                <input type="email" class="form-control" name="correo" placeholder="Correo" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="clave" placeholder="Clave" required />
                        </div>
                        <?php if($errorHabilitacion){
                            echo "<div class=\"alert alert-danger\" >Usuario Deshabilitado</div>";
                        }else if($errorAutenticacion){
                            echo "<div class=\"alert alert-danger\" >Error de correo o clave</div>";
                        } ?>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info" name="autenticar">Autenticar</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>