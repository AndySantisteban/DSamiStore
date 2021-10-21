<?php

include("../../controllers/config.php");
include("../../models/producto.php");
include("../../models/categoria.php");

class ProductoControlador {

    public static function listar() {
        $productos = Producto::listar(); 
        $categorias = Categoria::listar();
        
        include("../../views/productos/includes/tabla.php");
    }

    public static function agregar() {
        $nombre      = $_REQUEST['nombre'];
        $idCategoria = $_REQUEST['idCategoria'];
        $descripcion = $_REQUEST['descripcion'];
        $precio      = $_REQUEST['precio'];
        $estado      = $_REQUEST['estado'];
        
        Producto::agregar(
            $nombre,
            $idCategoria,
            $descripcion,
            1,
            1, 
            $precio,
            $estado
        );

        header("location:../../views/productos");
    }

    public static function editar() {
        $idProducto  = $_REQUEST['idProducto'];
        $nombre      = $_REQUEST['nombre'];
        $idCategoria = $_REQUEST['idCategoria'];
        $descripcion = $_REQUEST['descripcion'];
        $precio      = $_REQUEST['precio'];
        $estado      = $_REQUEST['estado'];
        
        Producto::editar(
            $idProducto, 
            $nombre,
            $idCategoria,
            $descripcion,
            1,
            1, 
            $precio,
            $estado
        );

        header("location:../../views/productos");
    }

    public static function eliminar() {
        $idProducto = $_REQUEST['idProducto'];

        Producto::eliminar($idProducto);
        
        header("location:../../views/productos");
    }
}
?>
