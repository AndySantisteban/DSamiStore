<?php

include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");

class EmpleadoControlador {

    public static function listar() {
        session_start();

        $username = $_SESSION['username'];

        if (!$username) {
            header("location:../../controllers/login");
        } else {
            $usuario = Usuario::encontrar($username); 
            $empleados = Empleado::listar(); 

            include("../../views/empleados/index.php");
        }
  }

    public static function agregar() {
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
        $id = $_REQUEST['idEmpleado'];

        Empleado::eliminar($id);
        
        header("location:../../controllers/empleados");
    }
}
?>