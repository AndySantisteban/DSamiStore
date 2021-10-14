<!-- Modal para Agregar-->
<div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <form name="form-data" action="../../controllers/usuarios/agregar.php" method="POST">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar Usuario</h5>
          <button type="button" class="btn-close p-2" data-bs-dismiss="modal" aria-label="Close">
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12">
              <label for="name" class="form-label">Nombres</label>
              <input type="text" class="form-control" placeholder="Agrega tus nombres" name="nombre" required='true' autofocus>
            </div>

            <div class="col-md-12">
              <label for="name" class="form-label"> Usuario </label>
              <input type="text" class="form-control" placeholder="Agrega tu nombre usuario" name="username" required='true' autofocus>
            </div>

            <div class="col-md-12">
              <label for="name" class="form-label">Email</label>
              <input type="text" class="form-control" placeholder="Agrega tu email" name="email" required='true' autofocus>
            </div>

            <div class="col-md-12">
              <label for="name" class="form-label">Contraseña</label>
              <input type="text" class="form-control" placeholder="Agrega tu contraseña"name="password" required='true' autofocus>
            </div>
          
            <div class="col-md-12">
              <label for="recipient-name" class="col-form-label">Rol</label>
              <select name="idRol" class="form-select form-select-sm" aria-label=".form-select-sm example" ">
              <option selected>--Seleccione Rol--</option>
                <?php
                  foreach ($roles as $rol) {
                        echo "<option " . " value=" . $rol->id  . ">" .$rol->nombre  . "</option>";
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