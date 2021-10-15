<?php

include("../../controllers/config.php");
include("../../models/empleado.php");
include("../../models/usuario.php");

class EmpleadoControlador{

    public static function listar() {

        $empleados = Empleado::listar(); 
        $users = Usuario::listar_General();

        include("../../views/empleados/includes/listar_vista.php");
    }

    public static function agregar() {
        
        $idUsuario = $_REQUEST['idUsuario'];
        $nombre = $_REQUEST['nombre'];
        $apellidoMaterno = $_REQUEST['apellidoMaterno'];
        $apellidoPaterno = $_REQUEST['apellidoPaterno'];
        $telefono = $_REQUEST['telefono'];
        $fechaNac = $_REQUEST['fechaNac'];
        $direccion = $_REQUEST['direccion'];
        
        Empleado::agregar($idUsuario , $nombre, $apellidoMaterno , $apellidoPaterno , $telefono, $fechaNac , $direccion );
        
        header("location:../../views/empleados");
    }

    public static function editar() {
        
        $id      = $_REQUEST['idEmpleado'];
        $idUsuario = $_REQUEST['idUsuario'];
        $nombre = $_REQUEST['nombre'];
        $apellidoMaterno = $_REQUEST['apellidoMaterno'];
        $apellidoPaterno = $_REQUEST['apellidoPaterno'];
        $telefono = $_REQUEST['telefono'];
        $fechaNac = $_REQUEST['fechaNac'];
        $direccion = $_REQUEST['direccion'];
        

        Empleado::editar($id, $idUsuario , $nombre, $apellidoMaterno , $apellidoPaterno , $telefono, $fechaN , $direccion );

       header("location:../../views/empleados");
    }

    public static function eliminar() {

        $id = $_REQUEST['idEmpleado'];

        Empleado::eliminar($id);
        
        header("location:../../views/empleados");
    }

}

?>