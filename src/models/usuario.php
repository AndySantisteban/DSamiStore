<?php 
include("../../controllers/config.php");
class Usuario{
    public $id;
    public $nombre;
    public $password;
    public $username;
    public $email;
    public $rol;

    function __construct($id, $nombre, $password , $username , $email , $rol) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->password = $password;
        $this->username = $username;
        $this->email = $email;   
        $this->rol = $rol;    
    }

    public static function listar() {
        global $link;
        $usuarios = [];
        $consulta  = ("SELECT U.*, R.nombre nombreRol FROM usuario U INNER JOIN rol R  ON U.idRol = R.idRol ");
        $resultado = mysqli_query($link, $consulta);
        
        while ($valor = mysqli_fetch_assoc($resultado)){ 
            $rol = new Rol($valor ['idRol'], $valor['nombreRol'] );
            $usuarios[]= new Usuario($valor['idUsuario'], $valor['nombre'], 
            $valor['password'], $valor['userName'], $valor['email'], $rol);
        }
        return $usuarios;
    } 


    public static function listar_General() {
        global $link;
        $usuarios = [];
        $consulta  = ("SELECT U.*, R.nombre nombreRol FROM usuario U INNER JOIN rol R  ON U.idRol = R.idRol ");
        $resultado = mysqli_query($link, $consulta);

        while ($valor = mysqli_fetch_assoc($resultado)){ 
            $usuarios[]= new Usuario($valor['idUsuario'], $valor['nombre'], 
            $valor['password'], $valor['userName'], $valor['email'], $valor['idRol']);
        }
        return $usuarios;
    } 

    public static function agregar($idRol, $nombre, $password , $username , $email){
        global $link; 
        $consulta = ("INSERT INTO usuario(idRol, nombre, password , userName , email ) VALUES ('" . $idRol . "', '" . $nombre . "' , '" . $password . "', '" . $username . "' , '" . $email . "')");
        $resultado = mysqli_query($link, $consulta);

        return $resultado;
    }

    public static function editar($id, $idRol, $nombre, $password , $username , $email) {
        global $link; 

        $consulta = ("UPDATE usuario SET idRol  ='" . $idRol . "', nombre  ='" . $nombre . "', password  ='" . $password . "' ,  
        userName  ='" . $username . "', email  ='" . $email . "'  WHERE idUsuario='" . $id . "'");
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