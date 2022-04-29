<?php

include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");
include("../../models/categoria.php");

class CategoriaControlador {

    public static function listar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $username = $_SESSION['username'];

        $usuario = Usuario::encontrar($username); 
        $categorias = Categoria::listar(); 

        include("../../views/categorias/index.php");
    }

    public static function agregar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $nombre = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
        
        Categoria::agregar($nombre, $descripcion);
        
        header("location:../../controllers/categorias");
    }

    public static function editar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $idCategoria = $_REQUEST['idCategoria'];
        $nombre      = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
        
        Categoria::editar($idCategoria, $nombre, $descripcion);

        header("location:../../controllers/categorias");
    }

    public static function eliminar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $idCategoria = $_REQUEST['idCategoria'];

        Categoria::eliminar($idCategoria);
        
        header("location:../../controllers/categorias");
    }
}
?>
