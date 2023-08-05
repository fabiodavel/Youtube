<?php 
include("includes/config.php");
include("vendor/autoload.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$post = filter_input_array(INPUT_POST);

$nome = $post['nome'];
$email = $post['email'];
$mensagem = $post['mensagem'];

$body = "
<div style='background:#CCC; padding: 60px'>
    <div style='background:#FFF; padding: 20px; font-family: arial; font-size: 14px; width:600px; margin:auto;'>
        <h3>Formulário de contato do site</h3>
        <strong>Nome:</strong>
        {$nome}
        <br>
        <strong>E-mail:</strong>
        {$email}
        <br>
        <strong>Mensagem:</strong>
        {$mensagem}
    </div>
</div>    
";

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
    $mail->addAddress('fabiodavel@dev.com.br', 'Fabio Davel');

    //Content
    $mail->isHTML(true);
    $mail->Subject = 'Contato do Site: ' . $nome;
    $mail->Body    = $body;

    $mail->send();
    header("location:retorno.php");
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}