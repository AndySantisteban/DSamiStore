<?php

include("../../controllers/config.php");
include("../../models/rol.php");

class RolControlador {

    public static function listar() {
        $roles = Rol::listar(); 

        include("../../views/roles/includes/tabla.php");
    }

    public static function agregar() {
        $nombre = $_REQUEST['nombre'];

        Rol::agregar($nombre);

        header("location:../../views/roles");
    }

    public static function editar() {
        $idRol  = $_REQUEST['idRol'];
        $nombre = $_REQUEST['nombre'];

        Rol::editar($idRol, $nombre);

        header("location:../../views/roles");
    }

    public static function eliminar() {
        $idRol = $_REQUEST['idRol'];

        Rol::eliminar($idRol);
        
        header("location:../../views/roles");
    }
}
?>
