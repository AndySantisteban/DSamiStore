<?php

include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");

class EmpleadoControlador {

    public static function listar() {
        session_start();
    
        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $username = $_SESSION['username'];

        $usuario = Usuario::encontrar($username); 
        $empleados = Empleado::listar(); 

        include("../../views/empleados/index.php");
    }

    public static function agregar() {
        session_start();

        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $nombre          = $_REQUEST['nombre'];
        $apellidoMaterno = $_REQUEST['apellidoMaterno'];
        $apellidoPaterno = $_REQUEST['apellidoPaterno'];
        $telefono        = $_REQUEST['telefono'];
        $fechaNac        = $_REQUEST['fechaNac'];
        $direccion       = $_REQUEST['direccion'];
        
        Empleado::agregar($nombre, $apellidoMaterno , $apellidoPaterno , $telefono, $fechaNac , $direccion );
        
        header("location:../../controllers/empleados");
    }

    public static function editar() {
        session_start();

        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $id              = $_REQUEST['idEmpleado'];
        $nombre          = $_REQUEST['nombre'];
        $apellidoMaterno = $_REQUEST['apellidoMaterno'];
        $apellidoPaterno = $_REQUEST['apellidoPaterno'];
        $telefono        = $_REQUEST['telefono'];
        $fechaNac        = $_REQUEST['fechaNac'];
        $direccion       = $_REQUEST['direccion'];
        
        Empleado::editar($id, $nombre, $apellidoMaterno , $apellidoPaterno , $telefono, $fechaNac , $direccion );

        header("location:../../controllers/empleados");
    }

    public static function eliminar() {
        session_start();

        if (!isset($_SESSION['username'])) {
            return header("location:../../controllers/login");
        }

        $id = $_REQUEST['idEmpleado'];

        Empleado::eliminar($id);
        
        header("location:../../controllers/empleados");
    }
}
?>