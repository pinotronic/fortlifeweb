<?php // Objetivo: Listar, Eliminar Usuario, 
// Envia: Crear, editar.
$procesado=false;
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
        <h4 class="card-title"><i class="fas fa-address-card"></i> Listado de Usuarios</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Id Usuario</th>
                            <th>Correo</th>
                            <th>Agente</th>
                            <th>Administrador</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $login = new Login();
                            $logins= $login -> consultarTodo();
                            //var_dump($agente);
                            foreach ($logins as $p){
                                echo "<tr>";
                                echo "<td>" . $p -> getIdUsuario() . "</td>"; 
                                echo "<td>" . $p -> getCorreo() . "</td>"; 
                                echo "<td>" . $p -> getIdAgente() . "</td>"; 
                                echo "<td>" . $p -> getIdAdministrador() . "</td>"; 
                                echo "<td>" . $p -> getStatus() . "</td>";
                                echo "<td nowrap>";
                                echo "<a href='index.php?pid=" . ("presentacion/login/actualizarUsuario") . "& idUsuario=" . $p -> getIdUsuario() . "'>
                                <span class='fas fa-edit' data-toggle='tooltip' data-placement='left' class='tooltipLink' data-original-title='Editar Usuario'>
                                </span>
                                </a>";
                                echo "</td>";
                                echo "</tr>";
                                    }
                                    echo "<a href='index.php?pid=" . ("presentacion/login/crearUsuario") . "'>
                                    <p>Nuevo Usuario</p>
                                    <span class='fas fa-plus' data-toggle='tooltip' data-placement='left'  class='tooltipLink' data-original-title='Crear Usuario'>
                                    </span>
                                    </a>";
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>