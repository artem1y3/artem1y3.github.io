<?php

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

		
			$text .= "Ваше ФИО: $fio\n\n";
			$text .= "Телефон: $tel\n";
			$text .= "Площадь комнаты, м2: $area\n";
			$text .= "Ориентация окон: $window\n";
			$info = "From: test@mail.ru\r\n";
			// if(mail("228zmei@gmail.com", "Обратная связь", $text , $info)){
			//    echo 'Сообщение отправлено';
			// } else {
			// 	echo 'сообщение не отправлено';
			// }
			if (mail("228zmei@gmail.com", "Заявка с сайта", "ФИО:".$fio,"From: 228zmei@mail.ru \r\n"))
			 {     echo "сообщение успешно отправлено"; 
			} else { 
			    echo "при отправке сообщения возникли ошибки";
			}?>
				

?>