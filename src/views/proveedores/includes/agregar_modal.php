<!-- Modal para Agregar-->
<div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form name="form-data" action="../../controllers/proveedores/agregar.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar proveedor</h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>

        <div class="modal-body">
          <div class="row">
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input type="text" class="form-control" name="nombre" placeholder="Agregar nombre" required autofocus>
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">RUC</label>
              <input type="text" class="form-control" name="ruc" placeholder="Agregar RUC" required>
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Razón social</label>
              <input type="text" class="form-control" name="razonSocial" placeholder="Agregar razón social" required>
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Teléfono</label>
              <input type="number" class="form-control" name="telefono" placeholder="Agregar teléfono" required>
            </div>
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