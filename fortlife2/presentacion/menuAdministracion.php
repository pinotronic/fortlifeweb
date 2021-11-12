<?php // Menu
include_once("logica/administrador.php");
include_once("logica/agente.php");
$administrador = new Administrador($_SESSION["id"]);
$administrador -> consultar();
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<body>
<div class="container-fluid"> 
    <div class="bg-dark">  
        <nav class="navbar navbar-expand-md   navbar-dark">
            <div class="container-fluid">
                <a href="index.php?pid=presentacion/agente/consultarAgente" class="navbar-brand" ><span class="fas fa-home" aria-hidden="true"></span></a>
                    <button type="button" 
                        class="navbar-toggler" 
                        data-bs-toggle="collapse" 
                        data-bs-target="#MenuNavegacion">
                            <span class="navbar-toggler-icon"></span>
                    </button>
            </div>
            <div id="MenuNavegacion" class="collapse navbar-collapse" >
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item dropdown ">
                        <a class="nav-link active dropdown-toggle" href="#"role="button" data-bs-toggle="dropdown">Crear</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php?pid=presentacion/admon/consultarAdministrador">Administrador</a></li>
                            <li><a class="dropdown-item" href="index.php?pid=presentacion/agente/consultarAgente">Agente</a></li>
                            <li><a class="dropdown-item" href="index.php?pid=presentacion/login/consultarUsuario">Usuario</a></li>
                        </ul>
                    </li>        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">25 Puntos</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.php?pid=presentacion/consultarAdministrador.php">Administrador</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Polizas</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.php?pid=presentacion/buscarAdministrador.php">Administrador</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Log</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.php?pid=presentacion/buscarLogAdministrador.php">Log Administrador</a>
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Administrador: <?php echo $administrador -> getNombre() . " " . $administrador -> getApellido() ?><span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.php?pid=presentacion/editarPerfilAdministrador.php">Editar Perfil</a>
                                    <a class="dropdown-item" href="index.php?pid=presentacion/editarClaveAdministrador.php">Editar Clave</a>
                                    <a class="dropdown-item" href="index.php?pid=presentacion/editarForoAdministrador.php">Editar Foto</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?salida=1">Salir</a>
                            </li>
                        </ul>
                    </div>

        </nav>
    </div>
</div


    