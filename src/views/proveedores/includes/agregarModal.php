<!-- Modal para Agregar-->
<div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form name="form-data" action="../../controllers/proveedor/agregar.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar proveedor</h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <label for="name" class="form-label">Nombre de la Proveedor</label>
              <input type="text" class="form-control" name="nombre" required='true' autofocus>
            </div>
            <div class="col-md-12">
              <label for="name" class="form-label">RUC del Proveedor</label>
              <input type="text" class="form-control" name="ruc" required='true' autofocus>
            </div>
            <div class="col-md-12">
              <label for="name" class="form-label">Razón social del Proveedor</label>
              <input type="text" class="form-control" name="razonSocial" required='true' autofocus>
            </div>
            <div class="col-md-12">
              <label for="name" class="form-label">Telefono del Proveedor</label>
              <input type="text" class="form-control" name="telefono" required='true' autofocus>
            </div>

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