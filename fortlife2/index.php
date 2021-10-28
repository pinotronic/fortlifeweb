<?php
session_start();
require("logica/Administrador.php");
if(isset($_GET["salida"])){
    $_SESSION["id"]="";
}
?>
<!DOCTYPE html>
<head>
    <title>Almacen</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <script charset="utf-8">
        $(function () {
            $("[data-toggle=\"tooltip\"]").tooltip();
        });
    </script>
</head>
<body>
    <?php
                if(empty($_GET["pid"])){
                    include("presentacion/autenticacion.php");
                }else{
                    if($_SESSION["id"]==""){
                    header("Location: index.php");
                    die();
                    }else{
                    include("presentacion/menuAdministracion.php");
                    include($_GET["pid"] . ".php");
                    }
                }
        ?>
</body>

</html>