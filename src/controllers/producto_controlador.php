<?php

include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");
include("../../models/categoria.php");
include("../../models/producto.php");

class ProductoControlador {

    public static function listar() {
        session_start();

        $username = $_SESSION['username'];

        if (!$username) {
            header("location:../../controllers/login");
        } else {
            $usuario = Usuario::encontrar($username); 
            $categorias = Categoria::listar(); 
            $productos = Producto::listar(); 

            include("../../views/productos/index.php");
        }
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

        header("location:../../controllers/productos");
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

        header("location:../../controllers/productos");
    }

    public static function eliminar() {
        $idProducto = $_REQUEST['idProducto'];

        Producto::eliminar($idProducto);
        
        header("location:../../controllers/productos");
    }
}
?>
