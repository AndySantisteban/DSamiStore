<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categorias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
  
</head>

<body screen_capture_injected="true" class="modal-open" style="padding-right: 16px;">
  <div class="row g-0">
    <div class="col-sm-2 col-md-2">
      <h3>D'Sami Store</h3>
    </div>
    <div class="col-10">
      <?php
      include('config.php');

      $sqlCategoria   = ("SELECT * FROM categoria");
      $queryCategoria = mysqli_query($con, $sqlCategoria);
      //$cantidad     = mysqli_num_rows($queryCategoria);
      ?>
      <div class="d-flex flex-column bd-highlight mb-3">
        <div class="p-2 bd-highlight" class="position-absolute top-0 end-0">
          <img src="" width="42" height="42" class="rounded-circle" />
        </div>
        <div class="p-2 bd-highlight">
          <h2>Categorias</h2>
        </div>
        <div class="p-2 bd-highlight row">
          <div class="col-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar">Agregar</button>
          </div>
          <div class="col-8 d-flex justify-content-end">
            <input type="text" class="w-50 p-1 " class="form-control" placeholder="Buscar una categorias (Código o Nombre)" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <button class="input-group-text  bg-primary text-white" id="basic-addon2" type="button " class="w-20 p-1">Buscar</button>
          </div>
        </div>
      </div>
      <?php include('agregarCat.php') ?>
      <div class="table-responsive">
          <table class="table table-bordered ">
            <thead >
              <tr>
                <!--fbdbsfb  -->
                <th scope="col">Codigo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              while ($dataCategoria = mysqli_fetch_assoc($queryCategoria)) { ?>
                <tr>
                  <td><?php echo $dataCategoria['idCategoria']; ?></td>
                  <td><?php echo $dataCategoria['nombre']; ?></td>
                  <td><?php echo $dataCategoria['descripcion']; ?></td>
                  <td>
                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" 
                    data-bs-target="#editarCat<?php echo $dataCategoria['idCategoria']; ?>">
                    Editar
                  </button>
              <!--Ventana Modal para Actualizar--->
              <?php include('editarCat.php') ?>
                    <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" 
                    data-bs-target="#eliminarCat<?php echo $dataCategoria['idCategoria']; ?>">Eliminar</button>
              <!--Ventana Modal para la Alerta de Eliminar--->
              <?php include('eliminarCat.php') ?>
                  </td>
                </tr>

              <?php } ?>
          </table>
      </div>
    </div>
  </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</html>