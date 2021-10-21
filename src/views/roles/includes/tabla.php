<div class="card">
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($roles as $rol) { ?>
                    <tr>
                        <td><?php echo $rol->id; ?></td>
                        <td><?php echo $rol->nombre; ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-secondary me-2" type="button" data-bs-toggle="modal" data-bs-target="#editarRol<?php echo $rol->id; ?>">
                                    Editar
                                </button>
                                <?php include("../../views/roles/includes/editar_modal.php") ?>
                                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#eliminarRol<?php echo $rol->id; ?>">Eliminar</button>
                                <!--Ventana Modal para la Alerta de Eliminar--->
                                <?php include("../../views/roles/includes/eliminar_modal.php") ?>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
