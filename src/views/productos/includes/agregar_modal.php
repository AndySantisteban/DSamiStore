<!-- Modal para agregar-->
<div class="modal fade " id="agregarProducto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">


  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">

      <form action="../../controllers/productos/agregar.php" method="POST" name="form-data">

        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar Producto </h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          

            <div class=" form-group mb-3">
              <label for="recipient-name" placeholder="" class="col-form-label">Nombre: </label>
              <input type="text" class="form-control" placeholder="Agregar un nombre" name="nombre">

            </div>

            <div class=" mb-3">
                <label for="recipient-name" placeholder="" class="col-form-label">Categoria: </label>
                <select name="idCategoria" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleciona una categoría</option>
                  <?php
                      foreach ($categorias as $categoria) {
                        echo "<option " . " value=" . $categoria->id  . ">" .$categoria->nombre  . "</option>";
                          }
                      ?>
                </select>
              </div>

              <!-- <div class=" mb-3">
                <label for="recipient-name" placeholder="" class="col-form-label">Imagen: </label>
                <select name="idImagen" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleciona una imagen</option>
                  
                </select>
              </div> -->

              <!-- <div class=" mb-3">
                <label for="recipient-name" placeholder="" class="col-form-label">Almacen: </label>
                <select name="idAlmacen" class="form-select form-select-sm" aria-label=".form-select-sm example">
                  <option selected>Seleciona una imagen</option>
                  
                </select>
              </div> -->

              <div class=" mb-3">
                <label for="recipient-name" class="col-form-label" placeholder="Agregar un nombre">Descripción: </label>
                <textarea class="form-control" aria-label="With textarea" name="descripcion"></textarea>
              </div>

              <div class=" mb-3">
                <label for="recipient-name" class="col-form-label" placeholder="Agregar un nombre">Precio: </label>
                <input class="form-control" aria-label="With textarea" name="precio"></input>
              </div>

              <div class=" mb-3">
                <label for="recipient-name" class="col-form-label" placeholder="Agregar un nombre">Estado: </label>
                <input class="form-control" aria-label="With textarea" name="estado"></input>
              </div>
          

          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary btn-block" id="btnEnviar">
            Aceptar
          </button>
        </div>
        </div>
      </form>     

      </div>
    </div>
  </div>
</div>