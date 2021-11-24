<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
//Load Composer's autoloader
require __DIR__ . '../../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



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

    //Recipients
    $mail->setFrom($_POST['email_receptor'], $_POST['name']);
    $mail->addAddress($_POST['email_receptor']);
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    //Attachments
//    $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body    = $_POST['sms'];
    $mail->AltBody = 'Nuevo Mensaje de pedido DSamiStore';

    $mail->send();
    echo 'Exito';
    header("Location: ../views/proveedores/");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
