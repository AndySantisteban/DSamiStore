<?php 
include("../../config/database.php");

class Categoria {
    public $id;
    public $nombre;
    public $descripcion;

    function __construct($id, $nombre, $descripcion) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->descripcion = $descripcion;      
    }

    public static function listar() {
        global $link;
        $categorias = [];
        $consulta  = ("SELECT * FROM categoria");
        $resultado = mysqli_query($link, $consulta);
        while ($valor = mysqli_fetch_assoc($resultado)){ 
            $categorias[] = new Categoria($valor['idCategoria'], $valor['nombre'], $valor['descripcion']);
        }
        return $categorias;
    } 
    
    public static function agregar($nombre, $descripcion){
        global $link; 
        $consulta = ("INSERT INTO categoria(
            nombre,
            descripcion
        )
        VALUES (
            '" . $nombre . "',
            '" . $descripcion . "
        ')");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }

    public static function editar($id, $nombre, $descripcion) {
        global $link; 
        $consulta = ("UPDATE categoria
            SET
            nombre            = '" . $nombre . "',
            descripcion       = '" . $descripcion . "'
            WHERE idCategoria = '" . $id . "'
        ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
    
    public static function eliminar($id) {
        global $link; 
        $consulta = ("DELETE FROM categoria WHERE idCategoria= '" . $id . "' ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
}
?>
