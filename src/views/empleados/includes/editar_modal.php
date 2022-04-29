<!--ventana para Update--->
<div class="modal fade" id="editarEmpleado<?php echo $empleado->id; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="editaEmpleado">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Editar empleado</h5>
        <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <form method="POST" action="../../controllers/empleados/editar.php">
        <div class="modal-body" id="cont_modal">
          <input type="hidden" name="idEmpleado" value="<?php echo $empleado->id; ?>">
  
          <div class="row d-grid gap-3">
            <div class="col-md-12">
              <label for="editar-nombre" class="col-form-label">Nombre</label>
              <input type="text" id="editar-nombre" name="nombre" class="form-control" value="<?php echo $empleado->nombre; ?>" placeholder="Agregar nombre" required autofocus>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="editar-apellidoPaterno" class="col-form-label">Apellido paterno</label>
                  <input type="text" id="editar-apellidoPaterno" name="apellidoPaterno" class="form-control" value="<?php echo $empleado->apellidoPaterno; ?>" placeholder="Agregar apellido paterno" required="true">
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="editar-apellidoMaterno" class="col-form-label">Apellido materno</label>
                  <input type="text" class="form-control" id="editar-apellidoMaterno" name="apellidoMaterno" value="<?php echo $empleado->apellidoMaterno; ?>" placeholder="Agregar apellido materno" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="editar-telefono" class="col-form-label">Telefono</label>
                <input type="number" class="form-control" id="editar-telefono" name="telefono" value="<?php echo $empleado->telefono; ?>" required>
              </div>

              <div class="col-md-6">
                <label for="editar-fechaNac" class="form-label">Fecha nacimiento</label>
                <input type="date" class="form-control" id="editar-fechaNac" name="fechaNac" value="<?php echo $empleado->fechaNac; ?>" placeholder="Agregar fecha de nacimiento" required>
              </div>
            </div>

            <div class="col-md-12">
              <label for="editar-direccion" class="col-form-label">Dirección</label>
              <input type="text" class="form-control" id="editar-direccion" name="direccion" value="<?php echo $empleado->direccion; ?>" placeholder="Agregar dirección" required>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Aceptar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!---fin ventana Update --->