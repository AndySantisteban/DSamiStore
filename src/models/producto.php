<?php 
include("../../config/database.php");

class Producto {
    public $id;
    public $nombre;
    public $categoria;
    public $descripcion;
    public $imagen;
    public $almacen;    
    public $precio;
    public $estado;

    function __construct($id, $nombre,$categoria, $descripcion , $imagen, $almacen,  $precio, $estado ) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->descripcion = $descripcion; 
        $this->imagen = $imagen;
        $this->almacen = $almacen;  
        $this->precio= $precio;
        $this->estado = $estado;   
    }

    public static function listar() {
        global $link;
        $productos = [];
        $consulta  = ("SELECT P.* ,C.nombre nombreCategoria, C.descripcion descripcionCategoria FROM producto P INNER JOIN categoria C ON P.idCategoria = C.idCategoria  ");
        $resultado = mysqli_query($link, $consulta);

        while ($valor = mysqli_fetch_assoc($resultado)){ 
            $categoria = new Categoria($valor ['idCategoria'], $valor['nombreCategoria'] , $valor['descripcionCategoria']);
            $productos[] = new Producto($valor['idProducto'], $valor['nombre'], $categoria ,$valor['descripcion'], $valor['idImagen'] , $valor['idAlmacen'], $valor['precio'],$valor['estado']);
        }

        return $productos;
    }

    public static function agregar($nombre,$categoria, $descripcion , $imagen, $almacen,  $precio, $estado){
        global $link; 
        $consulta = ("INSERT INTO producto(
            nombre,
            idCategoria,
            descripcion,
            idImagen,
            idAlmacen,
            precio,
            estado
        )
        VALUES (
            '" . $nombre . "',
            '" . $categoria . "',
            '" . $descripcion . "',
            '" . $imagen . "',
            '" . $almacen . "',
            '" . $precio . "',
            " . $estado . "
        )");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }

    public static function editar($id,$nombre,$categoria, $descripcion , $imagen, $almacen, $precio, $estado) {
        global $link; 
        $consulta = ("UPDATE producto
            SET
            nombre           = '" . $nombre . "',
            idCategoria      = '" . $categoria . "',
            descripcion      = '" . $descripcion .   "',
            idImagen         = '" . $imagen . "',
            idAlmacen        = '" . $almacen . "',
            precio           = '" . $precio . "',
            estado           = " . $estado . "
            WHERE idProducto = '" . $id . "'
        ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
    
    public static function eliminar($id) {
        global $link; 
        $consulta = ("DELETE FROM producto WHERE idProducto= '" . $id . "' ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
}
?>
