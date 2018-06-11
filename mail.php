<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$fio = $_POST['fio'];
$fio = htmlspecialchars($fio);
$fio = urldecode($fio);
$fio = trim($fio);

$tel = $_POST['tel'];
$tel = htmlspecialchars($tel);
$tel = urldecode($tel);
$tel = trim($tel);

$tel = $_POST['tel'];
$tel = htmlspecialchars($tel);
$tel = urldecode($tel);
$tel = trim($tel);

$area = $_POST['area'];
$area = htmlspecialchars($area);
$area = urldecode($area);
$area = trim($area);

$window = $_POST['window'];
$window = htmlspecialchars($window);
$window = urldecode($window);
$window = trim($window);

$tv = $_POST['tv'];
$tv = htmlspecialchars($tv);
$tv = urldecode($tv);
$tv = trim($tv);

$pc = $_POST['pc'];
$pc = htmlspecialchars($pc);
$pc = urldecode($pc);
$pc = trim($pc);

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mail.ru';  																							// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'petrovskov.shura@mail.ru'; // Ваш логин от почты с которой будут отправляться письма
$mail->Password = '1dsgs23g'; // Ваш пароль от почты с которой будут отправляться письма
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465; // TCP port to connect to / этот порт может отличаться у других провайдеров

$mail->setFrom('petrovskov.shura@mail.ru'); // от кого будет уходить письмо?
$mail->addAddress('artembk739@gmail.com');     // Кому будет уходить письмо 
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Заявка';
$text .= "ФИО: $fio\n\n<br>";
$text .= "Телефон: $tel\n<br>";
$text .= "Площадь комнаты, м2: $area\n<br>";
$text .= "Ориентация окон: $window\n<br>";
if(!empty($_POST['tv'])){
    $text .= "Имеется телевизор\n<br>";
}
if(!empty($_POST['pc'])){
    $text .= "Имеется компьютер\n<br>";
}
$info = "From: petrovskov.shura@mail.ru\r\n";
$mail->Body    = $text;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
     header('location: http://artem1y3:50000/index.php?in=1');
}
?>