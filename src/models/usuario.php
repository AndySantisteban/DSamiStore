<?php 
include("../../config/database.php");

class Usuario {
    public $id;
    public $nombre;
    public $password;
    public $username;
    public $email;
    public $rol;
    public $empleado;

    function __construct($id, $nombre, $password , $username , $email , $rol, $empleado) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->password = $password;
        $this->username = $username;
        $this->email = $email;   
        $this->rol = $rol;
        $this->empleado = $empleado;
    }

    public static function listar() {
        global $link;
        $usuarios = [];

        $consulta  = ("SELECT U.*, R.nombre nombreRol, E.nombre nombreEmpleado, E.apellidoMaterno apellidoMaternoEmpleado, E.apellidoPaterno apellidoPatenoEmpleado, E.telefono telefonoEmpleado, E.fechaNac fechaNacEmpleado, E.direccion direccionEmpleado FROM usuario U
            INNER JOIN empleado E ON U.idEmpleado = E.idEmpleado
            INNER JOIN rol R ON U.idRol = R.idRol;"
        );
        $resultado = mysqli_query($link, $consulta);

        while ($valor = mysqli_fetch_assoc($resultado)){ 
            $rol = new Rol($valor['idRol'], $valor['nombreRol']);
            $empleado = new Empleado(
                $valor['idEmpleado'],
                $valor['nombreEmpleado'],
                $valor['apellidoMaternoEmpleado'],
                $valor['apellidoPatenoEmpleado'],
                $valor['telefonoEmpleado'],
                $valor['fechaNacEmpleado'],
                $valor['direccionEmpleado']
            );
            $usuarios[] = new Usuario(
                $valor['idUsuario'],
                $valor['nombre'], 
                $valor['password'],
                $valor['userName'],
                $valor['email'],
                $rol,
                $empleado
            );
        }
        return $usuarios;
    } 

    public static function agregar($nombre, $password , $username , $email, $idRol, $idEmpleado) {
        global $link; 
        $consulta = ("INSERT INTO usuario(
            nombre,
            password,
            userName,
            email,
            idRol,
            idEmpleado
        ) VALUES (
            '" . $nombre . "' ,
            '" . $password . "',
            '" . $username . "' ,
            '" . $email . "',
            '" . $idRol . "' ,
            '" . $idEmpleado . "'
        )");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }

    public static function encontrar($username) {
        global $link;
        $usuarios = [];
        $consulta  = ("SELECT U.*, R.nombre nombreRol, E.nombre nombreEmpleado, E.apellidoMaterno apellidoMaternoEmpleado, E.apellidoPaterno apellidoPatenoEmpleado, E.telefono telefonoEmpleado, E.fechaNac fechaNacEmpleado, E.direccion direccionEmpleado FROM usuario U
            INNER JOIN empleado E ON U.idEmpleado = E.idEmpleado
            INNER JOIN rol R ON U.idRol = R.idRol WHERE U.username = '" . $username . "'"
        );
        $resultado = mysqli_query($link, $consulta);

        while ($valor = mysqli_fetch_assoc($resultado)){ 
            $rol = new Rol($valor['idRol'], $valor['nombreRol']);
            $empleado = new Empleado(
                $valor['idEmpleado'],
                $valor['nombreEmpleado'],
                $valor['apellidoMaternoEmpleado'],
                $valor['apellidoPatenoEmpleado'],
                $valor['telefonoEmpleado'],
                $valor['fechaNacEmpleado'],
                $valor['direccionEmpleado']
            );
            $usuarios[] = new Usuario(
                $valor['idUsuario'],
                $valor['nombre'], 
                $valor['password'],
                $valor['userName'],
                $valor['email'],
                $rol,
                $empleado
            );
        }

        if (count($usuarios) == 0) {
            return NULL;
        }

        return $usuarios[0];
    }

    public static function editar($id, $nombre, $password , $username , $email, $idRol, $idEmpleado) {
        global $link; 
        $consulta = ("UPDATE usuario
            SET
            nombre          = '" . $nombre . "',
            password        = '" . $password . "' ,  
            userName        = '" . $username . "',
            email           = '" . $email . "',
            idRol           = '" . $idRol  . "',
            idEmpleado      = '" . $idEmpleado . "'
            WHERE idUsuario = '" . $id . "'
        ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
    
    public static function eliminar($id) {
        global $link; 
        $consulta = ("DELETE FROM usuario WHERE idUsuario= '" . $id . "' ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
}
?>