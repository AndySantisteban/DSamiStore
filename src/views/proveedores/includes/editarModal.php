<!--ventana para Update--->
<div class="modal fade" id="editarCat<?php echo $proveedor->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="editaCat">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Proveedor</h5>
        <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <form method="POST" action="../../controllers/proveedor/editar.php">
        <input type="hidden" name="idProveedor" value="<?php echo $proveedor->id; ?>">
        <div class="modal-body" id="cont_modal">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre del proveedor:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $proveedor->nombre; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">RUC del Proveedor:</label>
            <input type="text" name="ruc" class="form-control" value="<?php echo $proveedor->ruc; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Razón social del Proveedor:</label>
            <input type="text" name="razonSocial" class="form-control" value="<?php echo $proveedor->razonSocial; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Telefono  del Proveedor:</label>
            <input type="text" name="telefono" class="form-control" value="<?php echo $proveedor->telefono; ?>" required="true">
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