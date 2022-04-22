<?php

include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");
include("../../models/categoria.php");

class CategoriaControlador {

    public static function listar() {
        session_start();

        $username = $_SESSION['username'];

        if (!$username) {
            header("location:../../controllers/login");
        } else {
            $usuario = Usuario::encontrar($username); 
            $categorias = Categoria::listar(); 

            include("../../views/categorias/index.php");
        }
    }

    public static function agregar() {
        $nombre      = $_REQUEST['nombre'];
        $descripcion      = $_REQUEST['descripcion'];
        
        Categoria::agregar($nombre, $descripcion);
        
        header("location:../../controllers/categorias");
    }

    public static function editar() {
        $idCategoria = $_REQUEST['idCategoria'];
        $nombre      = $_REQUEST['nombre'];
        $descripcion = $_REQUEST['descripcion'];
        
        Categoria::editar($idCategoria, $nombre, $descripcion);

        header("location:../../controllers/categorias");
    }

    public static function eliminar() {
        $idCategoria = $_REQUEST['idCategoria'];

        Categoria::eliminar($idCategoria);
        
        header("location:../../controllers/categorias");
    }
}
?>
