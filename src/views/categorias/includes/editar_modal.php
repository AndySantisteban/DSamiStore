<!--ventana para Update--->
<div class="modal fade" id="editarCat<?php echo $categoria->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="editaCat">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar categoria</h5>
        <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <form method="POST" action="../../controllers/categorias/editar.php">
        <input type="hidden" name="idCategoria" value="<?php echo $categoria->id; ?>">
        <div class="modal-body" id="cont_modal">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre de la categoria:</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $categoria->nombre; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Descripcion:</label>
            <input type="text" name="descripcion" class="form-control" value="<?php echo $categoria->descripcion; ?>" placeholder=""required="true">
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