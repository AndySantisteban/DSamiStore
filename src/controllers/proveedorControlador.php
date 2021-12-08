<?php

require __DIR__ . '../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

include("../../controllers/config.php");
include("../../models/rol.php");
include("../../models/empleado.php");
include("../../models/proveedor.php");
include("../../models/usuario.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


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


    public static function enviarEmail() {
        session_start();

        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host       = $_ENV['HOST_EMAIL'];
            $mail->SMTPAuth   = true;
            $mail->Username   = $_ENV['USERNAME_EMAIL'];
            $mail->Password   = $_ENV['PASSWORD_EMAIL'];
            $mail->SMTPSecure = "tls";
            $mail->Port       = 587;
        
            
            $user = Usuario::encontrar($_SESSION['username']);
        
            //Recipients
            $mail->setFrom($user->email, $user->nombre);
            $mail->addAddress($_POST['email_receptor']);
        
            //Content
            $mail->isHTML(true);
            $mail->Subject = $_POST['subject'];
            $mail->Body    = $_POST['sms'];
            $mail->AltBody = 'Nuevo Mensaje de pedido DSamiStore';
        
            $mail->send();
            header("location:../../views/proveedores/index.php");
        } catch (Exception $e) {
            header("location:../../views/proveedores/index.php");
        }
    }

}

?>