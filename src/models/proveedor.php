<?php 
  include("../../controllers/config.php");
  
  class Proveedor{
      public $id;
      public $nombre;
      public $ruc;
      public $razonSocial;
      public $telefono;

    function __construct($id, $nombre, $ruc, $razonSocial, $telefono) {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->ruc = $ruc;      
        $this->razonSocial = $razonSocial;     
        $this->telefono = $telefono;     
    }

    public static function listar() {
        global $link;
        $proveedores = [];
        $consulta  = ("SELECT * FROM proveedor");
        $resultado = mysqli_query($link, $consulta);
        while ($valor = mysqli_fetch_assoc($resultado)){ 
            $proveedores[]= new Proveedor($valor['idProveedor'], $valor['nombre'], $valor['ruc'], $valor['razonSocial'], $valor['telefono']);
        }
        return $proveedores;
    } 
    
    public static function agregar($nombre, $ruc, $razonSocial, $telefono){
        global $link; 
        $consulta = ("INSERT INTO proveedor(
          nombre,
          razonSocial,
          telefono,
          ruc
      )
      VALUES (
          '".$nombre. "',
          '".$razonSocial. "',
          '".$telefono. "',
          '".$ruc. "'
      )");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }

    public static function editar($id, $nombre, $ruc, $razonSocial, $telefono) {
        global $link; 
        $consulta = ("UPDATE proveedor 
        SET 
        nombre            ='" .$nombre. "',
        ruc               ='" .$ruc. "',
        razonSocial       ='" .$razonSocial. "',
        telefono          ='" .$telefono. "'
        WHERE idProveedor ='" .$id. "'
    ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
    
    public static function eliminar($id) {
        global $link; 
        $consulta = ("DELETE FROM proveedor WHERE idProveedor= '".$id . "' ");
        $resultado = mysqli_query($link, $consulta);
        return $resultado;
    }
  }
?>