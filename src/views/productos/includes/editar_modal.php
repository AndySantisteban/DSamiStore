<!-- Modal para editar --->
<div class="modal fade" id="editarProducto<?php echo $producto->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="editaP">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form method="POST" action="../../controllers/productos/editar.php">
        <div class="modal-header">
          <h5 class="modal-title">Editar producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" id="cont_modal">
          <input type="hidden" name="idProducto" value="<?php echo $producto->id; ?>">
          
          <div class="mb-3">
            <label for="editar-nombre" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" id="editar-nombre" name="nombre" value="<?php echo $producto->nombre; ?>" required="true">
          </div>
          
          <div class="mb-3">
            <label for="editar-idCategoria" class="col-form-label">Categoria</label>
            <select class="form-select" id="editar-idCategoria" name="idCategoria" aria-label=".form-select-sm example">
              <?php
                foreach ($categorias as $cat) {
                  $selected = $cat->id == $producto->cat->id ? "selected" : "";
                      echo "<option " . $selected ." value=" . $cat->id  . ">" .$cat->nombre  . "</option>";
                        }
              ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="editar-descripcion" class="col-form-label">Descripción:</label>
            <input type="text" class="form-control" id="editar-descripcion" name="descripcion" value="<?php echo $producto->descripcion; ?>" required="true">
          </div>

          <div class="mb-3">
            <label for="editar-precio" class="col-form-label">Precio</label>
            <input type="is_double" class="form-control" id="editar-precio" name="precio" value="<?php echo $producto->precio; ?>" required>
          </div>

          <div>
            <label for="editar-estado" class="col-form-label">Estado</label>
            <input type="is_double" class="form-control" id="editar-estado" name="estado" value="<?php echo $producto->estado; ?>" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>
