<?php

$method = $_SERVER['REQUEST_METHOD'];

if ( $method === 'POST' ){


	$adminEmail = array('dominix29121987@gmail.com, info@uaitsmart.com');
	$mailSubject = 'Заявка с сайта itSmart';

	$c = true;

	foreach ($data as $key => $value) {
		if ($value != "") {
			$message .= "
				" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
				<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
				<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
			
			</tr>";
		}
	}
	$message = "<table style='width: 100%;'>$message</table>";

	include "libMail/libmail.php"; // вставляем файл с классом


	$m= new Mail; // начинаем
	$m->From( "itSmart;send@uaitsmart.com" ); // от кого отправляется почта
	$m->To($adminEmail); // кому адресованно
	$m->Subject($mailSubject);
	$m->Body($message, 'html');
//	$m->Cc( "copy@asd.com"); // копия письма отправится по этому адресу
//	$m->Bcc( "bcopy@asd.com"); // скрытая копия отправится по этому адресу
	$m->Priority(3) ;    // приоритет письма
	if($_FILES['file'] != ''){ // Следим за именем файла в форме
		$file = $_FILES['file'];
		$m->Attach( $file['tmp_name'], $file['name'], $file['type'], 'attachment'); // прикрепленный файл
	}
	$m->Send();    // а теперь пошла отправка

//	$data = array("status" => "ok");
//	echo json_encode($data);
}
else{
	$data = array("status" => "error");
	echo json_encode($data);
}
?>