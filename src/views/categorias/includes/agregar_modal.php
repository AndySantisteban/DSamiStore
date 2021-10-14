<!-- Modal para Agregar-->
<div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form name="form-data" action="../../controllers/categorias/agregar.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar categoria</h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group mb-3">
            <label for="name" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" placeholder="Nombre" required='true' autofocus>
          </div>
          <div class="group">
            <label for="name" class="col-form-label">Descripción</label>
            <input type="text" class="form-control" name="descripcion" placeholder="Descripción" required='true' autofocus>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary btn-block" id="btnEnviar">
            Aceptar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>