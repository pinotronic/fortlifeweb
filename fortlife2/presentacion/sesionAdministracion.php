<?php
$administrador = new Administrador($_SESSION["id"]);
$administrador -> consultar();
?>
<div class="container">
    <div>
        <div class="card-header">
            <h3>Perfil</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <img src=<?php echo($administrador -> getFoto()!="")?$administrador -> getFoto():"http://icons.iconarchive.com/icons/custom-icon-design/silky-line-user/512/user2-2-icon.png"; ?> width="100%" class="rounded">
                </div>
                <div class="col-md-9">
                    <div class="table-responsive-sm">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Nombres</th>
                                <td><?php echo $administrador -> getNombre() ?></td>
                            </tr>
                            <tr>
                               <th>Apellido</th>
                               <td><?php echo $administrador -> getApellido() ?></td> 
                            </tr>
                            <tr>
                                <th>Direccion</th>
                                <td><?php echo $administrador -> getDireccion() ?></td>
                            </tr>
                            <tr>
                                <th>Colonia</th>
                                <td><?php echo $administrador -> getColonia() ?></td>
                            </tr>
                            <tr>
                                <th>Estado</th>
                                <td><?php echo $administrador -> getEstado() ?></td>
                            </tr>
                            <tr>
                                <th>Ciudad</th>
                                <td><?php echo $administrador -> getCiudad() ?></td>
                            </tr>
                            <tr>
                                <th>Correo</th>
                                <td><?php echo $administrador -> getCorreo() ?></td>
                            </tr>
                            <tr>
                                <th>Telefono</th>
                                <td><?php echo $administrador -> getTelefono() ?></td>
                            </tr>
                            <tr>
                                <th>Celular</th>
                                <td><?php echo $administrador -> getCelular() ?></td>
                            </tr>
                            <tr>
                                <th>RFC</th>
                                <td><?php echo $administrador -> getRfc() ?></td>
                            </tr>
                            <tr>
                                <th>CURP</th>
                                <td><?php echo $administrador -> getCurp() ?></td>
                            </tr>
                            <tr>
                                <th>Fecha de Nacimiento</th>
                                <td><?php echo $administrador -> getFechaNacimiento() ?></td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td><?php echo ($administrador -> getStatus()==1)? "Habilitado": "Desabilitado"; ?></td>
                            </tr>
                            <tr>
                                <th>cargo</th>
                                <td><?php echo $administrador -> getCargo() ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <p><?php echo "Su rol es: Administrador"; ?></p>
        </div>
    </div>
</div>