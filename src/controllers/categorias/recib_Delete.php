<?php
//include("../../views/Categoria/config.php");
include("../../controllers/config.php");
$idRegistros = $_REQUEST['idCategoria'];

$DeleteRegistro = ("DELETE FROM categoria WHERE idCategoria= '" . $idRegistros . "' ");
$Eliminar = mysqli_query($link, $DeleteRegistro);
header("location:../../views/Categoria/categorias.php");
