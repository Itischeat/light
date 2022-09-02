<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['number'];


$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                               
$mail->Username = 'pahaaa@bk.ru';
$mail->Password = '12131415q';
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;

$mail->setFrom('pahaaa@bk.ru');
$mail->addAddress('jamp.ivonin@bk.ru'); 
$mail->isHTML(true);

$mail->Subject = 'Новый покупатель';
$mail->Body    = 'Человек оставил заявку, его телефон ' .$phone. '';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: index.html');
}
?>