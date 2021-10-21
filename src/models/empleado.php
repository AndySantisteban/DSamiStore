<?php 
include("../../controllers/config.php");

class Empleado {
    public $id;
    public $nombre;
    public $apellidoMaterno;
    public $apellidoPaterno;
    public $telefono;
    public $fechaNac;
    public $direccion;


    function __construct($id , $nombre, $apellidoMaterno , $apellidoPaterno , $telefono, $fechaNac , $direccion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->telefono = $telefono;   
        $this->fechaNac = $fechaNac; 
        $this->direccion = $direccion;
    }

    public static function listar() {
        global $link;
        $empleados = [];
        $consulta  = ("SELECT * FROM empleado");
        $resultado = mysqli_query($link, $consulta);

        while ($valor = mysqli_fetch_assoc($resultado)){ 
            $empleados[] = new Empleado($valor['idEmpleado'], $valor['nombre'], $valor['apellidoMaterno'], $valor['apellidoPaterno'], $valor['telefono'], $valor['fechaNac'], $valor['direccion']);
        }
        return $empleados;
    } 

    public static function agregar($idUser, $nombre, $apellidoMaterno , $apellidoPaterno , $telefono, $fechaNac , $direccion){
        global $link; 
        $consulta = ("INSERT INTO empleado(
            idUsuario,
            nombre,
            apellidoMaterno,
            apellidoPaterno ,
            telefono,
            fechaNac,
            direccion
        ) 
        VALUES (
            '" . $idUser . "',
            '" . $nombre . "' ,
            '" . $apellidoMaterno . "',
            '" . $apellidoPaterno . "',
            '" . $telefono . "',
            '" . $fechaNac . "',
            '" . $direccion . "'
        )");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }

    public static function editar($id , $idUser, $nombre, $apellidoMaterno , $apellidoPaterno , $telefono, $fechaNac , $direccion) {
        global $link; 
        $consulta = ("UPDATE empleado
            SET
            idUsuario        = '" . $idUser . "',
            nombre           = '" . $nombre . "',
            apellidoMaterno  = '" . $apellidoMaterno . "',
            apellidoPaterno  = '" . $apellidoPaterno . "', telefono  ='" . $telefono . "' , fechaNac  ='" . $fechaNac . "', direccion  ='" . $direccion . "'
            WHERE idEmpleado = '" . $id . "'
        ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
        
    }
    
    public static function eliminar($id) {
        global $link; 
        $consulta = ("DELETE FROM empleado WHERE idEmpleado= '" . $id . "' ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
}
?>