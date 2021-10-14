<!--ventana para Update--->
<div class="modal fade" id="editarUsuario<?php echo $usuario->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="editaUsuario">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Usuario</h5>
        <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <form method="POST" action="../../controllers/usuarios/editar.php">
        <input type="hidden" name="idUsuario" value="<?php echo $usuario->id; ?>">
        <div class="modal-body" id="cont_modal">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombres</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $usuario->nombre; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Usuario</label>
            <input type="text" name="username" class="form-control" value="<?php echo $usuario->username; ?>" required="true">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $usuario->email; ?>" required="true">
          </div>

          <div class="col-md-12">
              <label for="recipient-name" class="col-form-label">Rol</label>
              <select name="idRol" class="form-select form-select-sm" aria-label=".form-select-sm example" ">
                <?php
                  foreach ($roles as $rol) {
                    $selected = $rol->id == $usuario->rol->id ? "selected" : "";
                        echo "<option " . $selected ." value=" . $rol->id  . ">" .$rol->nombre  . "</option>";
                          }
                ?>
          </select>
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