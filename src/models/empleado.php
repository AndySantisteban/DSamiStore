<?php 
include("../../controllers/config.php");
class Empleado{
    public $id;
    public $nombre;
    public $apellidoMaterno;
    public $apellidoPaterno;
    public $telefono;
    public $fechaNac;
    public $direccion;
    public $user;


    function __construct($id , $nombre, $apellidoMaterno , $apellidoPaterno , $telefono, $fechaNac , $direccion, $user) {

        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->telefono = $telefono;   
        $this->fechaNac = $fechaNac; 
        $this->direccion = $direccion;
        $this->user = $user;       
    }

    public static function listar() {
        global $link;
        $empleados = [];
        $consulta  = ("SELECT E.*, U.nombre nombreUser, U.password password , U.username username , U.email email, U.idRol idRol FROM empleado E INNER JOIN usuario U  ON E.idUsuario = U.idUsuario ");
        $resultado = mysqli_query($link, $consulta);

        while ($valor = mysqli_fetch_assoc($resultado)){ 
            $user = new Usuario($valor['idUsuario'], $valor['nombreUser'], $valor['password'], $valor['username'], $valor['email'], $valor['idRol']);

            $empleados[]= new Empleado($valor['idEmpleado'], $valor['nombre'], $valor['apellidoMaterno'], $valor['apellidoPaterno'], $valor['telefono'], $valor['fechaNac'], $valor['direccion'],  $user);
        }
        return $empleados;
    } 

    public static function agregar($idUser, $nombre, $apellidoMaterno , $apellidoPaterno , $telefono, $fechaNac , $direccion){

        global $link; 
        $consulta = ("INSERT INTO empleado (idUsuario, nombre, apellidoMaterno , apellidoPaterno , telefono, fechaNac , direccion ) 
        VALUES ('" . $idUser . "', '" . $nombre . "' , '" . $apellidoMaterno . "', '" . $apellidoPaterno . "' , '" . $telefono . "', '" . $fechaNac . "', '" . $direccion . "')");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }

    public static function editar($id , $idUser, $nombre, $apellidoMaterno , $apellidoPaterno , $telefono, $fechaNac , $direccion) {
        global $link; 

        $consulta = ("UPDATE empleado SET idUsuario  ='" . $idUser . "', nombre  ='" . $nombre . "', apellidoMaterno  ='" . $apellidoMaterno . "' , 
        apellidoPaterno  ='" . $apellidoPaterno . "', telefono  ='" . $telefono . "' , fechaNac  ='" . $fechaNac . "', direccion  ='" . $direccion . "'  
        WHERE idEmpleado ='" . $id . "'");
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