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
          <div class="mb-3">
            <label for="editar-nombre" class="col-form-label">Nombre</label>
            <input type="text" class="form-control" id="editar-nombre" name="nombre" placeholder="Agregar nombre" value="<?php echo $categoria->nombre; ?>" required="true">
          </div>

          <div>
            <label for="editar-descripcion" class="col-form-label">Descripción</label>
            <input type="text" class="form-control" id="editar-descripcion" name="descripcion" placeholder="Agregar descripción" value="<?php echo $categoria->descripcion; ?>" placeholder=""required="true">
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