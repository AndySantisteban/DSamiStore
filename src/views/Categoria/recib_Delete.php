<?php
include('config.php');
$idRegistros = $_REQUEST['idCategoria'];

$DeleteRegistro = ("DELETE FROM categoria WHERE idCategoria= '".$idRegistros."' ");
$Eliminar = mysqli_query($con, $DeleteRegistro);
header("location:categorias.php");
?>