<table class="table table-bordered ">
    <thead>
        <tr>
            <!--fbdbsfb  -->
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col" class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $categorias = Categoria::listar();
            foreach ($categorias as $categoria) { ?>
            <tr>
                <td><?php echo $categoria->id; ?></td>
                <td><?php echo $categoria->nombre; ?></td>
                <td><?php echo $categoria->descripcion; ?></td>
                <td>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="modal" data-bs-target="#editarCat<?php echo $categoria->id; ?>">
                            Editar
                        </button>
                        <!--Ventana Modal para Actualizar--->
                        <?php include("../../views/categorias/includes/editar_modal.php") ?>
                        <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#eliminarCat<?php echo $categoria->id; ?>">Eliminar</button>
                        <!--Ventana Modal para la Alerta de Eliminar--->
                        <?php include("../../views/categorias/includes/eliminar_modal.php") ?>
                    </div>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>