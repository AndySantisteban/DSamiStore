<!-- Modal para Agregar-->
<div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form name="form-data" action="../../controllers/roles/agregar.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar rol</h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        
        <div class="modal-body">
          <div>
            <label for="agregar-nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="agregar-nombre" name="nombre" placeholder="Agregar nombre" required autofocus>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" id="btnEnviar">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>