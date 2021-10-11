
<?php
include('config.php');
$idRegistros = $_REQUEST['idCategoria'];
$nombre      = $_REQUEST['nombre'];
$descripcion = $_REQUEST['descripcion'];

$update = ("UPDATE categoria 
	SET 
	nombre  ='" .$nombre. "',
	descripcion  ='" .$descripcion. "'

WHERE idCategoria='" .$idRegistros. "'
");
$result_update = mysqli_query($con, $update);

header("location:categorias.php");
?>
