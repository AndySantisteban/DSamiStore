<?php

include("../../controllers/config.php");
include("../../models/usuario.php");
include("../../models/rol.php");

class UsuarioControlador{

    public static function listar() {

        $usuarios = Usuario::listar(); 
        $roles = Rol::listar();

        include("../../views/usuarios/includes/listar_vista.php");
    }

    public static function agregar() {
        $idRol      = $_REQUEST['idRol'];
        $nombre      = $_REQUEST['nombre'];
        $password      = $_REQUEST['password'];
        $username      = $_REQUEST['username'];
        $email      = $_REQUEST['email'];
        
        Usuario::agregar($idRol , $nombre, $password , $username , $email);
        
        header("location:../../views/usuarios");
    }

    public static function editar() {
        
        $id      = $_REQUEST['idUsuario'];
        $idRol      = $_REQUEST['idRol'];
        $nombre      = $_REQUEST['nombre'];
        $password      = $_REQUEST['password'];
        $username      = $_REQUEST['username'];
        $email      = $_REQUEST['email'];
        

        Usuario::editar($id, $idRol , $nombre, $password , $username , $email);

       header("location:../../views/usuarios");
    }

    public static function eliminar() {

        $id = $_REQUEST['idUsuario'];

        Usuario::eliminar($id);
        
        header("location:../../views/usuarios");
    }

}

?>