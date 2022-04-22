<?php
include("../../models/usuario.php");
include("../../models/rol.php");
include("../../models/empleado.php");
include("../../models/proveedor.php");

require __DIR__ . '../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__, 2));
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ProveedorControlador{

    public static function listar() {
        session_start();

        $username = $_SESSION['username'];

        if (!$username) {
            header("location:../../controllers/login");
        } else {
            $usuario = Usuario::encontrar($username); 
            $proveedores = Proveedor::listar(); 

            include("../../views/proveedores/index.php");
        }
    }

    public static function agregar() {
        $nombre              = $_REQUEST['nombre'];
        $ruc 	             = $_REQUEST['ruc'];
        $razonSocial         = $_REQUEST['razonSocial'];
        $telefono 	         = $_REQUEST['telefono'];
        
        Proveedor::agregar($nombre, $ruc, $razonSocial, $telefono);
        
        header("location:../../controllers/proveedores");
    }

    public static function editar() {
        
        $idProveedor    = $_REQUEST['idProveedor'];
        $nombre         = $_REQUEST['nombre'];
        $ruc 	        = $_REQUEST['ruc'];
        $razonSocial    = $_REQUEST['razonSocial'];
        $telefono 	    = $_REQUEST['telefono'];
        
        Proveedor::editar($idProveedor, $nombre, $ruc, $razonSocial, $telefono);
        
        header("location:../../controllers/proveedores");
    }

    public static function eliminar() {

        $idProveedor = $_REQUEST['idProveedor'];

        Proveedor::eliminar($idProveedor);
        
        header("location:../../controllers/proveedores");
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
            header("location:../../controllers/proveedores");
        } catch (Exception $e) {
            header("location:../../controllers/proveedores");
        }
    }

}

?>