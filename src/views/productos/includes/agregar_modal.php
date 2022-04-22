<!-- Modal para agregar -->
<div class="modal fade " id="agregarProducto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <form action="../../controllers/productos/agregar.php" method="POST" name="form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar producto </h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="agregar-nombre" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" id="agregar-nombre" name="nombre" placeholder="Agregar nombre" required autofocus>
          </div>

          <div class="mb-3">
            <label for="agregar-idCategoria" class="col-form-label">Categoria</label>
            <select class="form-select" id="agregar-idCategoria" name="idCategoria" aria-label=".form-select-sm example">
              <option selected>Selecionar categoría</option>
              <?php
                  foreach ($categorias as $categoria) {
                    echo "<option " . " value=" . $categoria->id  . ">" .$categoria->nombre  . "</option>";
                      }
                  ?>
            </select>
          </div>

          <div class="mb-3">
            <label for="agregar-descripcion" class="col-form-label">Descripción</label>
            <textarea class="form-control" id="agregar-descripcion" name="descripcion" placeholder="Agregar descripción" required></textarea>
          </div>

          <div class="mb-3">
            <label for="agregar-precio" class="col-form-label">Precio</label>
            <input type="number" class="form-control" id="agregar-precio" name="precio" placeholder="Agregar precio" required></input>
          </div>

          <div class="mb-3">
            <label for="agregar-estado" class="col-form-label">Estado</label>
            <input type="number" class="form-control" id="agregar-estado" name="estado" placeholder="Agregar estado" required></input>
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
