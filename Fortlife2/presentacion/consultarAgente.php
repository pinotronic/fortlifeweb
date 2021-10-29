<?php // Objetivo: Listar, Eliminar Personas, 
// Envia: Crear, editar.
$procesado=false;
if(isset($_GET["action"]) && $_GET["action"]=="delete"){
    $eliminarPersona = new Administrador($_GET["idAdministrador"]);
    $eliminarPersona->eliminar();
    //$eliminarPersona -> select();
    //$eliminarPersona -> eliminar($idAdministrador);
}
?>
<?php if($procesado){ ?>
        <div class="alert alert-success" >Datos Ingresados
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"> &times;</span>
        </button>
        </div>
        <?php }?>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Consultar Perfil</h4>
        </div>
        <div class="card-body">
            <?php if(isset($_GET['action'])&& $_GET['action']=="delete"){?>
                <?php if($procesado){?>
            <div class="alert alert-success">El registro fue eliminado exitosamente<button type="button" class="close"  data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"> & times;</span>
                        </button>
            </div>
                <?php }}?>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id Persona</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $administrador = new Administrador();
                    $administradores= $administrador -> consultarTodo();
                    foreach ($administradores as $p){
                        echo "<tr>";
                        echo "<td>" . $p -> getIdAdministrador() . "</td>"; 
                        echo "<td>" . $p -> getNombre() . "</td>"; 
                        echo "<td>" . $p -> getApellido() . "</td>"; 
                        echo "<td nowrap>";
                        echo "<a href='index.php?pid=" . ("presentacion/actualizarPersona") . "& idAdministrador=" . $p -> getIdAdministrador() . "'>
                        <span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Agente'>
                        </span>
                        </a>";
                        echo "<a href='index.php?pid=" . ("presentacion/consultarAgente") . "& idAdministrador=" .$p -> getIdAdministrador() . "&action=delete' onclick='return confirm(\"Confirma eliminar el Agente: " .$p -> getNombre() . "\")'>
                        <span class='fas fa-cut' data-toggle='tooltip' data-placement='left'  class='tooltipLink' data-original-title='Eliminar Agente'>
                        </span>
                        </a>";
                        echo "</td>";
                        echo "</tr>";
                             }
                             echo "<a href='index.php?pid=" . ("presentacion/crearPersona") . "'>
                             <p>Nuevo Persona</p>
                             <span class='fas fa-plus' data-toggle='tooltip' data-placement='left'  class='tooltipLink' data-original-title='Crear Agente'>
                             </span>
                             </a>";
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>