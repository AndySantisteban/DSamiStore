<?php 

        include("./includes/agregar_modal.php"); ?>

<table class="table table-bordered ">

    <thead>
        <tr>
            <th scope="col">Codigo</th>
            <th scope="col">Usuario</th>
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
            $empleados = Empleado::listar();
            foreach ($empleados as $empleado) { ?>
            <tr>
                <td><?php echo $empleado->id; ?></td>
                <td><?php echo $empleado->user->nombre; ?></td>
                <td><?php echo $empleado->nombre; ?></td>
                <td><?php echo $empleado->apellidoMaterno; ?></td>
                <td><?php echo $empleado->apellidoPaterno; ?></td>
                <td><?php echo $empleado->telefono; ?></td>
                <td><?php echo $empleado->direccion; ?></td>
                

                <td>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="modal" data-bs-target="#editarEmpleado<?php echo $empleado->id; ?>">
                            Editar
                        </button>
                        <!--Ventana Modal para Actualizar--->
                        <?php include("../../views/empleados/includes/editar_modal.php") ?>
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#eliminarEmpleado<?php echo $empleado->id; ?>">Eliminar</button>
                        <!--Ventana Modal para la Alerta de Eliminar--->
                        <?php include("../../views/empleados/includes/eliminar_modal.php") ?>
                    </div>
                </td>
            </tr>

        <?php } ?>
 
    </tbody>
</table>