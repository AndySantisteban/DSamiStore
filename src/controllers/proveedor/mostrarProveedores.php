<?php
    include("../../controllers/config.php");
    $query = getQuery("SELECT * FROM Proveedor");
?>

<table class="table">
  <thead>
    <tr>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">RUC</th>
        <th scope="col">Razón social</th>
        <th scope="col">Telefono</th>
        <th scope="col">Productos</th>
        <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach ($query as $proveedor) { ?> 
    <tr>
      <th scope="row"><?php echo $proveedor['idProveedor']; ?></th>
        <td><?php echo $proveedor['nombre']; ?></td>
        <td><?php echo $proveedor['ruc']; ?></td>
        <td><?php echo $proveedor['razonSocial']; ?></td>
        <td><?php echo $proveedor['telefono']; ?></td>
        <td><?php echo 'producto'; ?></td>
        <td><button type="button" class="btn btn-secondary">Editar</button>
        <button type="button" class="btn btn-outline-danger">Eliminar</button></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
