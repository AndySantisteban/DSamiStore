<!-- Modal para Agregar-->
<div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form name="form-data" action="../../controllers/empleados/agregar.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar empleado</h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>

        <div class="modal-body">
          <div class="row d-grid gap-3">
            <div class="col-md-12">
              <label for="agregar-nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="agregar-nombre" name="nombre" placeholder="Agregar nombre" required autofocus>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="agregar-apellidoPaterno" class="form-label">Apellido paterno</label>
                <input type="text" class="form-control" id="agregar-apellidoPaterno" name="apellidoPaterno" placeholder="Agregar apellido paterno" required autofocus>
              </div>

              <div class="col-md-6">
                <label for="agregar-apellidoMaterno" class="form-label">Apellido materno</label>
                <input type="text" class="form-control" id="agregar-apellidoMaterno" name="apellidoMaterno" placeholder="Agregar apellido materno" required autofocus>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <label for="agregar-telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="agregar-telefono" name="telefono" placeholder="Agregar teléfono" required>
              </div>

              <div class="col-md-6">
                <label for="agregar-fechaNac" class="form-label">Fecha nacimiento</label>
                <input type="text" class="form-control" id="agregar-fechaNac" name="fechaNac" placeholder="Agregar fecha de nacimiento" required>
              </div>
            </div>

            <div class="col-md-12">
              <label for="agregar-direccion" class="form-label">Direccion</label>
              <input type="text" class="form-control" id="agregar-direccion" name="direccion" placeholder="Agregar dirección" required>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary btn-block" id="btnEnviar">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>
