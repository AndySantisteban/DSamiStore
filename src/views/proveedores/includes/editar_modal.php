<!--ventana para Update--->
<div class="modal fade" id="editarCat<?php echo $proveedor->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="editaCat">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Proveedor</h5>
        <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <form method="POST" action="../../controllers/proveedores/editar.php">
        <input type="hidden" name="idProveedor" value="<?php echo $proveedor->id; ?>">
        <div class="modal-body">
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $proveedor->nombre; ?>" required>
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">RUC</label>
            <input type="text" name="ruc" class="form-control" value="<?php echo $proveedor->ruc; ?>" required>
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Razón social</label>
            <input type="text" name="razonSocial" class="form-control" value="<?php echo $proveedor->razonSocial; ?>" required>
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Teléfono</label>
            <input type="number" name="telefono" class="form-control" value="<?php echo $proveedor->telefono; ?>" required>
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