<?php
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPOptions = array (
    'ssl' => array(
        'verify_peer'  => false,
        'verify_peer_name'  => false,
        'allow_self_signed' => true));
$mail->SMTPAuth = true;
$mail->Username = "myyyrobot@gmail.com";
$mail->Password = "abzalken93";
$mail->setFrom('myyyrobot@gmail.com', 'Aqualine'); // название
$mail->addAddress('rahatsadykov784@gmail.com', 'Aqualine');
$mail->isHTML(true);
$mail->Subject  = "Aqualine";
    $mail->Body    = "<html>
    <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
    </head>
    <body>
        Имя: <b>".$_POST['name']."</b><br/>
        Телефон: <b>".$_POST['email']."</b><br/>
    </body>
    </html>";
$mail->AltBody = 'This is a plain-text message body';
echo "Спасибо. Ожидайте звонка.";
if (!$mail->send()) {
    exit("Mailer Error: " . $mail->ErrorInfo);
}
?>



