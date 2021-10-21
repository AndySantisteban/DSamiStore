<?php

include("../../controllers/config.php");
include("../../models/empleado.php");
include("../../models/usuario.php");
include("../../models/rol.php");

class UsuarioControlador {

    public static function listar() {
        $usuarios = Usuario::listar(); 
        $roles = Rol::listar();
        $empleados = Empleado::listar();

        include("../../views/usuarios/includes/listar_vista.php");
    }

    public static function agregar() {
        $nombre     = $_REQUEST['nombre'];
        $password   = $_REQUEST['password'];
        $username   = $_REQUEST['username'];
        $email      = $_REQUEST['email'];
        $idRol      = $_REQUEST['idRol'];
        $idEmpleado = $_REQUEST['idEmpleado'];

        Usuario::agregar($nombre, $password , $username , $email, $idRol, $idEmpleado);
        
        header("location:../../views/usuarios");
    }

    public static function editar() {
        $id         = $_REQUEST['idUsuario'];
        $nombre     = $_REQUEST['nombre'];
        $password   = $_REQUEST['password'];
        $username   = $_REQUEST['username'];
        $email      = $_REQUEST['email'];
        $idRol      = $_REQUEST['idRol'];
        $idEmpleado = $_REQUEST['idEmpleado'];

        Usuario::editar($id, $nombre, $password , $username , $email, $idRol , $idEmpleado);

        header("location:../../views/usuarios");
    }

    public static function eliminar() {
        $id = $_REQUEST['idUsuario'];

        Usuario::eliminar($id);
        
        header("location:../../views/usuarios");
    }
}
?>
