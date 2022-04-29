<?php

include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");
include("../../models/categoria.php");
include("../../models/producto.php");

class ProductoControlador {

    public static function listar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $username = $_SESSION['username'];

        $usuario = Usuario::encontrar($username); 
        $categorias = Categoria::listar(); 
        $productos = Producto::listar(); 

        include("../../views/productos/index.php");
    }

    public static function agregar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

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
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

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
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $idProducto = $_REQUEST['idProducto'];

        Producto::eliminar($idProducto);
        
        header("location:../../controllers/productos");
    }
}
?>
