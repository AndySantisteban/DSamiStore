<!-- Modal para Agregar-->
<div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form name="form-data" action="../../controllers/usuarios/agregar.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar usuario</h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>

        <div class="modal-body">
          <div class="mb-3">
            <label for="agregar-nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="agregar-nombre" name="nombre" placeholder="Agregar nombre" required autofocus>
          </div>

          <div class="mb-3">
            <label for="agregar-usuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="agregar-usuario" name="username" placeholder="Agregar usuario" required>
          </div>

          <div class="mb-3">
            <label for="agregar-email" class="form-label">Email</label>
            <input type="email" class="form-control" id="agregar-email" name="email" placeholder="Agregar email" required>
          </div>

          <div class="mb-3">
            <label for="agregar-password" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="agregar-password" name="password" placeholder="Agregar contraseña" required>
          </div>

          <div class="mb-3">
            <label for="agregar-idRol" class="col-form-label">Rol</label>
            <select class="form-select" id="agregar-idRol" name="idRol" aria-label=".form-select-sm example" ">
            <option selected>Seleccionar rol</option>
              <?php
                foreach ($roles as $rol) {
                      echo "<option " . " value=" . $rol->id  . ">" .$rol->nombre  . "</option>";
                        }
              ?>
            </select>
          </div>

          <div>
            <label for="agregar-idEmpleado" class="col-form-label">Empleado</label>
            <select class="form-select" id="agregar-idEmpleado" name="idEmpleado" aria-label=".form-select-sm example" ">
              <option selected>Seleccionar empleado</option>
                <?php
                  foreach ($empleados as $empleado) {
                        echo "<option " . " value=" . $empleado->id  . ">" .$empleado->nombre  . "</option>";
                          }
              ?>
            </select>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary" id="btnEnviar">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>