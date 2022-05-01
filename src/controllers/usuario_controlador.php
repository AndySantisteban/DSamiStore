<?php

include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");

class UsuarioControlador {

    public static function listar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $username = $_SESSION['username'];

        $usuario = Usuario::encontrar($username); 
        $usuarios = Usuario::listar(); 
        $roles = Rol::listar(); 
        $empleados = Empleado::listar(); 

        include("../../views/usuarios/index.php");
    }

    public static function agregar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

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
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

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
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $id = $_REQUEST['idUsuario'];

        Usuario::eliminar($id);
        
        header("location:../../controllers/usuarios");
    }
}
?>
