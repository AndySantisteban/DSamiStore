<?php
include('config.php');
$nombre      = $_REQUEST['nombre'];
$descripcion 	 = $_REQUEST['descripcion'];


$QueryInsert = ("INSERT INTO categoria(
    nombre,
    descripcion
)
VALUES (
    '".$nombre. "',
    '".$descripcion. "'
)");
$inserInmueble = mysqli_query($con, $QueryInsert);

header("location:categorias.php");
?>
