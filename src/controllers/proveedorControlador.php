<?php

include("../../controllers/config.php");
include("../../models/proveedor.php");

class ProveedorControlador{

    public static function listar() {

        $categorias = Proveedor::listar();

        include("../../views/proveedores/includes/tabla.php");
    }

    public static function agregar() {
        $nombre              = $_REQUEST['nombre'];
        $ruc 	             = $_REQUEST['ruc'];
        $razonSocial         = $_REQUEST['razonSocial'];
        $telefono 	         = $_REQUEST['telefono'];
        
        Proveedor::agregar($nombre, $ruc, $razonSocial, $telefono);
        
        header("location:../../views/proveedores/index.php");
    }

    public static function editar() {
        
        $idProveedor    = $_REQUEST['idProveedor'];
        $nombre         = $_REQUEST['nombre'];
        $ruc 	        = $_REQUEST['ruc'];
        $razonSocial    = $_REQUEST['razonSocial'];
        $telefono 	    = $_REQUEST['telefono'];
        
        Proveedor::editar($idProveedor, $nombre, $ruc, $razonSocial, $telefono);
        header("location:../../views/proveedores/index.php");
    }

    public static function eliminar() {

        $idProveedor = $_REQUEST['idProveedor'];

        Proveedor::eliminar($idProveedor);
        
        header("location:../../views/proveedores/index.php");
    }

}

?>