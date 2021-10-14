<?php 
 
        include("./includes/agregar_modal.php"); ?>

<table class="table table-bordered ">
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
            $usuarios = Usuario::listar();
            foreach ($usuarios as $usuario) { ?>
            <tr>
                <td><?php echo $usuario->id; ?></td>
                <td><?php echo $usuario->nombre; ?></td>
                <td><?php echo $usuario->username; ?></td>
                <td><?php echo $usuario->email; ?></td>
                <td><?php echo $usuario->rol->nombre; ?></td>

                <td>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="modal" data-bs-target="#editarUsuario<?php echo $usuario->id; ?>">
                            Editar
                        </button>
                        <!--Ventana Modal para Actualizar--->
                        <?php include("../../views/usuarios/includes/editar_modal.php") ?>
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#eliminarUsuario<?php echo $usuario->id; ?>">Eliminar</button>
                        <!--Ventana Modal para la Alerta de Eliminar--->
                        <?php include("../../views/usuarios/includes/eliminar_modal.php") ?>
                    </div>
                </td>
            </tr>

        <?php } ?>

        
    </tbody>


</table>