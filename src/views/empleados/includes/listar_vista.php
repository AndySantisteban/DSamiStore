<?php include("./includes/agregar_modal.php"); ?>

<div class="card">
    <div class="table-responsive">
        <table class="table table-borderless ">
            <thead>
                <tr>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido M</th>
                    <th scope="col">Apellido M</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Direccion</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($empleados as $empleado) { ?>
                    <tr>
                        <td><?php echo $empleado->id; ?></td>
                        <td><?php echo $empleado->nombre; ?></td>
                        <td><?php echo $empleado->apellidoMaterno; ?></td>
                        <td><?php echo $empleado->apellidoPaterno; ?></td>
                        <td><?php echo $empleado->telefono; ?></td>
                        <td><?php echo $empleado->direccion; ?></td>
                        
                        <td>
                            <div class="d-flex justify-content-center">
                                <button class="btn btn-secondary me-2" type="button" data-bs-toggle="modal" data-bs-target="#editarEmpleado<?php echo $empleado->id; ?>">
                                    Editar
                                </button>
                                <!--Ventana Modal para Actualizar--->
                                <?php include("../../views/empleados/includes/editar_modal.php") ?>
                                <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#eliminarEmpleado<?php echo $empleado->id; ?>">Eliminar</button>
                                <!--Ventana Modal para la Alerta de Eliminar--->
                                <?php include("../../views/empleados/includes/eliminar_modal.php") ?>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>
