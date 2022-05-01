<?php

include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");

class RolControlador {

    public static function listar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $username = $_SESSION['username'];

        $usuario = Usuario::encontrar($username); 
        $roles = Rol::listar(); 

        include("../../views/roles/index.php");
    }

    public static function agregar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $nombre = $_REQUEST['nombre'];

        Rol::agregar($nombre);

        header("location:../../controllers/roles");
    }

    public static function editar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $idRol  = $_REQUEST['idRol'];
        $nombre = $_REQUEST['nombre'];

        Rol::editar($idRol, $nombre);

        header("location:../../controllers/roles");
    }

    public static function eliminar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $idRol = $_REQUEST['idRol'];

        Rol::eliminar($idRol);
        
        header("location:../../controllers/roles");
    }
}
?>
