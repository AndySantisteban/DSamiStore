<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proveedores</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="navbar">
      <h1>D´SamiStore</h1>
    </div>
    <div class="container">
      <div class="sidebar"><h1></h1></div>
      <div class="container-proveedores">
          <div class="title-proveedores">
              <h2>Proveedores</h2>
          </div>
        <div class="subcontainer">
        <div class="row">
            <div class="col">
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#agregar">Agregar</button>         
            </div>
            <div class="col">
                <div class="input-group mb-3">
                    <input type="text" class="form-control m-2" placeholder="buscar un proveedor (Código o Nombre)" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button type="button" class="btn btn-success">Buscar</button>
                </div>
            </div>
            <?php include("../../models/addProveedor.php");?>         
        <div class="table-responsive">
          <?php include("../../controllers/proveedor/mostrarProveedores.php");?>          
        </div>
      </div>
  </body>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"
  ></script>
</html>