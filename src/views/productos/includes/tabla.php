<?php 

        include("./includes/agregar_modal.php"); ?>


<div  class="card">
  <div class="table-responsive">
  <table class="table table-borderless ">
  <thead>
    <tr>
      <!--fbdbsfb  -->
      <th scope="col">Codigo</th>
      <th scope="col">Categoria</th>
       <th scope="col">Imagen</th>
      <th scope="col">Almacen</th> 
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Precio</th>
      <th scope="col">Estado</th>
      <th scope="col" class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
            
    foreach ($productos as $producto) { ?>
    <tr>
      <td><?php echo $producto->id; ?></td>
      <td><?php echo $producto->categoria->nombre; ?></td>
      <td><?php echo $producto->imagen; ?></td>
      <td><?php echo $producto->almacen; ?></td>
      <td><?php echo $producto->nombre; ?></td>
      <td><?php echo $producto->descripcion; ?></td>
      <td><?php echo $producto->precio; ?></td>
      <td><?php echo $producto->estado; ?></td>

      
      <td>
        <div class="d-flex justify-content-center">
          <button class="btn btn-secondary me-2" type="button" data-bs-toggle="modal"
          data-bs-target="#editarProducto<?php echo $producto->id; ?>">
            Editar
          </button>

          <!--Ventana Modal para Actualizar--->
          <?php include("../../views/productos/includes/editar_modal.php") ?>
        
          <button class="btn btn-danger" type="button" data-bs-toggle="modal" 
          data-bs-target="#eliminarProducto<?php echo $producto->id;?>">
          Eliminar
          </button>
          <!--Ventana Modal para la Alerta de Eliminar--->
          <?php include("../../views/productos/includes/eliminar.php") ?>
        </div>
      </td>
    </tr>

    <?php } ?>
  </tbody>
</table>
  </div>
</div>

