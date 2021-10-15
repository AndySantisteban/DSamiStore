<div class="card">
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
                <tr>
                    <!--fbdbsfb  -->
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">RUC</th>
                    <th scope="col">Razón social</th>
                    <th scope="col">Telefono</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $proveedores = Proveedor::listar();
                    foreach ($proveedores as $proveedor) { ?>
                    <tr>
                        <td><?php echo $proveedor->id; ?></td>
                        <td><?php echo $proveedor->nombre; ?></td>
                        <td><?php echo $proveedor->ruc; ?></td>
                        <td><?php echo $proveedor->razonSocial; ?></td>
                        <td><?php echo $proveedor->telefono; ?></td>
                        <td>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-secondary me-2" type="button" data-bs-toggle="modal" data-bs-target="#editarCat<?php echo $proveedor->id; ?>">
                                    Editar
                                </button>
                                <!--Ventana Modal para Actualizar--->
                                <?php include("../../views/proveedores/includes/editarModal.php") ?>
                                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#eliminar<?php echo $proveedor->id; ?>">Eliminar</button>
                                <!--Ventana Modal para la Alerta de Eliminar--->
                                <?php include("../../views/proveedores/includes/eliminarModal.php") ?>
                            </div>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
