<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <?php include('../../views/includes/head.php') ?>
    <link rel="stylesheet" href="../../public/css/index.css">
    <link rel="stylesheet" href="../../public/css/bootstrap.css">
  </head>
  <body>
    <div class="app">
      <?php include('../../views/includes/sidebar.php') ?>
      <div class="app-content">
        <?php include('../../views/includes/navbar.php') ?>
        <div class="container px-4">
          <div class="py-4 bd-highlight row">
            <div class="title-proveedores py-2">
              <h2>Productos</h2>
            </div>
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                  data-bs-target="#agregarProducto">Agregar</button>
              </div>
              <div class="d-flex">
                <input type="text" class="form-control me-2"
                  placeholder="Buscar producto" aria-label="Recipient's username"
                  aria-describedby="basic-addon2">
                <button class="btn btn-primary"  id="basic-addon2" type="button ">Buscar</button>
              </div>
            </div>
          </div>
          
          <div class="table-responsive">
          <?php include("../../views/productos/includes/agregar_modal.php") ?>
          <?php include("../../views/productos/includes/tabla.php"); ?>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
