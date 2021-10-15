<!-- Modal para Agregar-->
<div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form name="form-data" action="../../controllers/empleados/agregar.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar Empleado</h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <div class="row d-grid gap-3">
            <div class="col-md-12">
              <label for="name" class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Agrega tus nombres" name="nombre" required='true' autofocus>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="name" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" placeholder="Agrega tu Apellido Paterno" name="apellidoPaterno" required='true' autofocus>
              </div>

              <div class="col-md-6">
                <label for="name" class="form-label"> Apellido Materno </label>
                <input type="text" class="form-control" placeholder="Agrega tu apellido materno" name="apellidoMaterno" required='true' autofocus>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="name" class="form-label">Telefono</label>
                <input type="text" class="form-control" placeholder="Agrega tu telefono"name="telefono" required='true' autofocus>
              </div>

              <div class="col-md-6">
                <label for="name" class="form-label"> Fecha Nacimiento </label>
                <input type="text" class="form-control" placeholder="Agrega tu fecha de nacimiento" name="fechaNac" required='true' autofocus>
              </div>
            </div>
            <div class="col-md-12">
              <label for="name" class="form-label">Direccion</label>
              <input type="text" class="form-control" placeholder="Agrega tu dirección"name="direccion" required='true' autofocus>
            </div>

          
            <div class="col-md-12">
              <label for="recipient-name" class="col-form-label">Usuario</label>
              <select name="idUsuario" class="form-select form-select-sm" aria-label=".form-select-sm example" ">
              <option selected>--Seleccione Usuario--</option>
                <?php
                  foreach ($users as $user) {
                        echo "<option " . " value=" . $user->id  . ">" .$user->nombre  . "</option>";
                          }
                ?>
          </select>
          </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button class="btn btn-primary btn-block" id="btnEnviar">
            Aceptar
          </button>
        </div>
      </form>
    </div>
  </div>
</div>