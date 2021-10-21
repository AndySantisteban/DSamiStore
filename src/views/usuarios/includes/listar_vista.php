<?php include("./includes/agregar_modal.php"); ?>

<div class="card">
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Email</th>
                    <th scope="col">Rol</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario->id; ?></td>
                        <td><?php echo $usuario->nombre; ?></td>
                        <td><?php echo $usuario->username; ?></td>
                        <td><?php echo $usuario->email; ?></td>
                        <td><?php echo $usuario->rol->nombre; ?></td>

                        <td>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-secondary me-2" type="button" data-bs-toggle="modal" data-bs-target="#editarUsuario<?php echo $usuario->id; ?>">
                                    Editar
                                </button>
                                <!--Ventana Modal para Actualizar--->
                                <?php include("../../views/usuarios/includes/editar_modal.php") ?>
                                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#eliminarUsuario<?php echo $usuario->id; ?>">Eliminar</button>
                                <!--Ventana Modal para la Alerta de Eliminar--->
                                <?php include("../../views/usuarios/includes/eliminar_modal.php") ?>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
