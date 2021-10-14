<!-- Ventana modal para eliminar -->
<div class="modal fade" id="eliminarRol<?php echo $rol->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <form name="form-data" action="../../controllers/roles/eliminar.php" method="DELETE">
        <div class="modal-header">
          <h5 class="modal-title" id="myModalLabel">Deseas eliminar el rol </h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>

        <div class="modal-body">
          <input type="hidden" name="idRol" value="<?php echo $rol->id; ?>">
          <strong style="text-align: center !important">
            <?php echo $rol->nombre; ?>
          </strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary btnBorrar btn-block" data-bs-dismiss="modal" id="<?php echo $rol->id; ?>">Borrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!---fin ventana eliminar--->