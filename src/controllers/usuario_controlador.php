<?php

include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");

class UsuarioControlador {

    public static function listar() {
        session_start();

        $username = $_SESSION['username'];

        if (!$username) {
            header("location:../../controllers/login");
        } else {
            $usuario = Usuario::encontrar($username); 
            $usuarios = Usuario::listar(); 
            $roles = Rol::listar(); 
            $empleados = Empleado::listar(); 

            include("../../views/usuarios/index.php");
        }
    }

    public static function agregar() {
        $nombre     = $_REQUEST['nombre'];
        $password   = $_REQUEST['password'];
        $username   = $_REQUEST['username'];
        $email      = $_REQUEST['email'];
        $idRol      = $_REQUEST['idRol'];
        $idEmpleado = $_REQUEST['idEmpleado'];

        Usuario::agregar($nombre, $password , $username , $email, $idRol, $idEmpleado);
        
        header("location:../../controllers/usuarios");
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

        header("location:../../controllers/usuarios");
    }

    public static function eliminar() {
        $id = $_REQUEST['idUsuario'];

        Usuario::eliminar($id);
        
        header("location:../../controllers/usuarios");
    }
}
?>
