<?php
//include("../../views/Categoria/config.php");
include("../../controllers/config.php");
$nombre      = $_REQUEST['nombre'];
$descripcion      = $_REQUEST['descripcion'];


$QueryInsert = ("INSERT INTO categoria(
    nombre,
    descripcion
)
VALUES (
    '" . $nombre . "',
    '" . $descripcion . "'
)");
$inserInmueble = mysqli_query($link, $QueryInsert);

header("location:../../views/Categoria/categorias.php");
