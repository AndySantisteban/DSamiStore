<!--ventana para Update--->
<div class="modal fade" id="editarEmpleado<?php echo $empleado->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="editaEmpleado">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar Empleado</h5>
        <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <form method="POST" action="../../controllers/empleados/editar.php">
        <input type="hidden" name="idEmpleado" value="<?php echo $empleado->id; ?>">
        <div class="modal-body" id="cont_modal">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombres</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo $empleado->nombre; ?>" required="true">
          </div>

          <div class="row ">
            <div class="col-md-6">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Apellido Materno</label>
                <input type="text" name="apellidoMaterno" class="form-control" value="<?php echo $empleado->apellidoMaterno; ?>" required="true">
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Apellido Paterno</label>
                <input type="text" name="apellidoPaterno" class="form-control" value="<?php echo $empleado->apellidoPaterno; ?>" required="true">
              </div>
            </div>
          </div>

          <div class="row ">
            <div class="col-md-6">
                <label for="recipient-name" class="col-form-label">Usuario</label>
                <select name="idUsuario" class="form-select form-select-sm" aria-label=".form-select-sm example" ">
                  <?php
                    foreach ($users as $user) {
                      $selected = $user->id == $empleado->user->id ? "selected" : "";
                          echo "<option " . $selected ." value=" . $user->id  . ">" .$user->nombre  . "</option>";
                            }
                  ?>
                </select>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Telefono</label>
                <input type="text" name="telefono" class="form-control" value="<?php echo $empleado->telefono; ?>" required="true">
              </div>
            </div>

          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Direccion</label>
            <input type="text" name="direccion" class="form-control" value="<?php echo $empleado->direccion; ?>" required="true">
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