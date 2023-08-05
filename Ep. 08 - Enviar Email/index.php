<?php 
include("includes/config.php");
include("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = SMTP_USER;
    $mail->Password   = SMTP_PASS;
    $mail->Port       = SMTP_PORT;
    $mail->CharSet    = 'utf8'; // utf8 / iso-8859-1

    //Recipients
    $mail->setFrom('fabiodavel@dev.com.br', 'Fabio Davel');
    $mail->addAddress('joao@gmail.com', 'João');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Contato do Site';
    $mail->Body    = 'João entrou em contato <b>teste!</b>';

    $mail->send();
    echo 'E-mail enviado com sucesso.';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}