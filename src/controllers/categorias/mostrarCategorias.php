<?php
//include("../../views/Categoria/config.php");
include("../../controllers/config.php");

$sqlCategoria   = ("SELECT * FROM categoria");
$queryCategoria = mysqli_query($link, $sqlCategoria);
//$cantidad     = mysqli_num_rows($queryCategoria);
?>
<table class="table table-bordered ">
    <thead>
        <tr>
            <!--fbdbsfb  -->
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($dataCategoria = mysqli_fetch_assoc($queryCategoria)) { ?>
            <tr>
                <td><?php echo $dataCategoria['idCategoria']; ?></td>
                <td><?php echo $dataCategoria['nombre']; ?></td>
                <td><?php echo $dataCategoria['descripcion']; ?></td>
                <td>
                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#editarCat<?php echo $dataCategoria['idCategoria']; ?>">
                        Editar
                    </button>
                    <!--Ventana Modal para Actualizar--->
                    <?php include("../../models/editarCat.php") ?>
                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#eliminarCat<?php echo $dataCategoria['idCategoria']; ?>">Eliminar</button>
                    <!--Ventana Modal para la Alerta de Eliminar--->
                    <?php include("../../models/eliminarCat.php") ?>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>