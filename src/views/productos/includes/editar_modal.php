<!--ventana para Update--->
<div class="modal fade" id="editarProducto<?php echo $producto->id; ?>" data-bs-backdrop="static"
  data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="editaP">


  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Producto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="../../controllers/productos/editar.php">
        <input type="hidden" name="idProducto" value="<?php echo $producto->id; ?>">
        <div class="modal-body" id="cont_modal">
          <div class="form-group">
            <div class="form-group">
              <label for="recipient-name" placeholder="" class="col-form-label">Nombre del Producto</label>
              <input type="text" name="nombre" class="form-control" value="<?php echo $producto->nombre; ?>" required="true">
            </div>
          </div>
          <div class="form-group">
            <label for="recipient-name" placeholder="" class="col-form-label">Categoria: </label>
            <select name="idCategoria" class="form-select form-select-sm" aria-label=".form-select-sm example">
              <?php
                foreach ($categorias as $cat) {
                  $selected = $cat->id == $producto->cat->id ? "selected" : "";
                      echo "<option " . $selected ." value=" . $cat->id  . ">" .$cat->nombre  . "</option>";
                        }

              ?>
            </select>

          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Descripción:</label>
            <input type="text" name="descripcion" class="form-control" value="<?php echo $producto->descripcion; ?>"
              required="true">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Precio:</label>
            <input type="is_double" name="precio" class="form-control" value="<?php echo $producto->precio; ?>"
              required="true">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Estado:</label>
            <input type="is_double" name="estado" class="form-control" value="<?php echo $producto->estado; ?>"
              required="true">
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
<!---fin ventana Update --->