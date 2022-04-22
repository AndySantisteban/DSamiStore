<?php

include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");

class RolControlador {

    public static function listar() {
        session_start();

        $username = $_SESSION['username'];

        if (!$username) {
            header("location:../../controllers/login");
        } else {
            $usuario = Usuario::encontrar($username); 
            $roles = Rol::listar(); 

            include("../../views/roles/index.php");
        }
    }

    public static function agregar() {
        $nombre = $_REQUEST['nombre'];

        Rol::agregar($nombre);

        header("location:../../controllers/roles");
    }

    public static function editar() {
        $idRol  = $_REQUEST['idRol'];
        $nombre = $_REQUEST['nombre'];

        Rol::editar($idRol, $nombre);

        header("location:../../controllers/roles");
    }

    public static function eliminar() {
        $idRol = $_REQUEST['idRol'];

        Rol::eliminar($idRol);
        
        header("location:../../controllers/roles");
    }
}
?>
