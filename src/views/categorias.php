<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Categorias</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
  <div class="row g-0">

    <div class="col-sm-2 col-md-2">
      <h3>D'Sami Store</h3>
    </div>
    <div class="col-10">
      <div class="d-flex flex-column bd-highlight mb-3">
        <div class="p-2 bd-highlight" class="position-absolute top-0 end-0">
          <img src="foto_FER.jpg" width="42" height="42" class="rounded-circle" />
        </div>
        <div class="p-2 bd-highlight">
          <h2>Categorias</h2>
        </div>
        <div class="p-2 bd-highlight row">
          <div class="col-4">
            <button class="input-group-text" id="basic-addon2" type="button" class="w-20 p-1">Agregar</button>
          </div>
          <div class="col-6 align-items-end">
            <input type="text" class="w-50 p-1" class="form-control" placeholder="Buscar una categorias (Código o Nombre)" aria-label="Recipient's username" aria-describedby="basic-addon2">
          </div>
          <div class="col">
            <button class="input-group-text" id="basic-addon2" type="button" class="w-20 p-1">Buscar</button>
          </div>

        </div>
      </div>


      <div>
        <table class="table">
          <thead>
            <tr>
              <!--fbdbsfb  -->
              <th scope="col">Codigo</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Cantidad de productos</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">001</th>
              <td>Articulo de limpieza</td>
              <td>No hay description</td>
              <td>0</td>
              <td>
                <div class="d-grid gap-2 d-md-block">
                  <button class="btn btn-primary btn-sm" type="button">Editar</button>
                  <button class="btn btn-primary btn-sm" type="button">Eliminar</button>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">002</th>
              <td>Producto de cocina</td>
              <td>No hay description</td>
              <td>1</td>
              <td>
                <div class="d-grid gap-2 d-md-block">
                  <button class="btn btn-primary btn-sm" type="button">Editar</button>
                  <button class="btn btn-primary btn-sm" type="button">Eliminar</button>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">003</th>
              <td>Articulo de Proteccion</td>
              <td>No hay description</td>
              <td>2</td>
              <td>
                <div class="d-grid gap-2 d-md-block">
                  <button class="btn btn-primary btn-sm" type="button">Editar</button>
                  <button class="btn btn-primary btn-sm" type="button">Eliminar</button>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  </div>
</body>

</html>