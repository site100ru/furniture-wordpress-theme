<?php
	
	session_start();
	$win = "true";
	
	// Подключаем WordPress для доступа к функциям темы
	require_once('../../../../wp-load.php');
	
	// Получаем email адреса из настроек темы
	$to = 'vasilyev-r@mail.ru'; // Адрес доставки почты по умолчанию
	
	// Собираем все email адреса из админки
	$emails_from_admin = array();
	
	// email из повторителя
	if (function_exists('mytheme_get_emails_extra')) {
		$extra_emails = mytheme_get_emails_extra();
		if (!empty($extra_emails) && is_array($extra_emails)) {
			foreach ($extra_emails as $email_item) {
				if (!empty($email_item['email'])) {
					$emails_from_admin[] = $email_item['email'];
				}
			}
		}
	}
	
	// Если есть email из админки, используем их вместо стандартных
	if (!empty($emails_from_admin)) {
		$to = implode(', ', $emails_from_admin);
	}
	
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	$mes = $_POST['mes'];

	$from 	 = 'info@furniture.ru';
	$subject = 'Заявка на расчет стоимости с сайта furniture.ru';
	
	// Проверяем есть ли загруженные файлы
	// Если есть, то отправляем этим способом
	if ( $_FILES['file']["name"][0] != null ) {
		
		$EOL = "\r\n"; // ограничитель строк, некоторые почтовые сервера требуют \n - подобрать опытным путём
		$boundary     = "--".md5(uniqid(time()));  // любая строка, которой не будет ниже в потоке данных.
		
		$subject= '=?utf-8?B?' . base64_encode($subject) . '?=';

		$headers    = "MIME-Version: 1.0;$EOL";   
		$headers   .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";  
		$headers   .= "From: $from\r\n"; 
		
		$message    = "
			<strong>Имя:</strong> ".$name."<br><br>
			<strong>Телефон:</strong> ".$tel."<br><br>
			<strong>Сообщение:</strong> ".$mes."<br><br>
			<strong>В прикрепленных файлах находятся изображения изделия или схематично нарисованный рисунок!</strong><br><br>
		";
		
		$multipart  = "--$boundary$EOL";   
		$multipart .= "Content-Type: text/html; charset=utf-8$EOL";   
		$multipart .= "Content-Transfer-Encoding: base64$EOL";   
		$multipart .= $EOL; // раздел между заголовками и телом html-части 
		$multipart .= chunk_split(base64_encode($message));   

		#начало вставки файлов

		foreach($_FILES["file"]["name"] as $key => $value){
			$filename = $_FILES["file"]["tmp_name"][$key];
			$file_type = $_FILES["file"]["type"][$key];
			$file_size = $_FILES["file"]["size"][$key];
			
			// Проверяем файлы на подходимость
			if ( ( $file_type == 'image/png' OR  $file_type == 'image/jpeg' OR $file_type ==  'application/pdf' OR $file_type == 'application/octet-stream' ) and ( $file_size < 5120000 ) ) {
				$file = fopen($filename, "rb");
				$data = fread($file,  filesize( $filename ) );
				fclose($file);
				$NameFile = $_FILES["file"]["name"][$key]; // в этой переменной надо сформировать имя файла (без всякого пути);
				$File = $data;
				$multipart .= "$EOL--$boundary$EOL";   
				$multipart .= "Content-Type: application/octet-stream; name=\"$NameFile\"$EOL";   
				$multipart .= "Content-Transfer-Encoding: base64$EOL";   
				$multipart .= "Content-Disposition: attachment; filename=\"$NameFile\"$EOL";   
				$multipart .= $EOL; // раздел между заголовками и телом прикрепленного файла 
				$multipart .= chunk_split(base64_encode($File));
			} else {
				$_SESSION['win'] = 1;
				$_SESSION['recaptcha'] = '<p class="text-light">Вы пытаетесь загрузить неподходящий формат или размер одного или нескольких файлов. Файлы должны быть в формате .jpg, .jpeg, .png, .pdf или .heic и размером не более 5 МБ каждый. Пожалуйста повторите попытку.</p>';
				header("Location: ".$_SERVER['HTTP_REFERER']);
				exit();
			}
		}

		#>>конец вставки файлов

		$multipart .= "$EOL--$boundary--$EOL";

		mail( $to, $subject, $multipart, $headers );
	
	} else {
		
		// Если загруженных файлов нет, то отправляем этим способом
		
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "From: $from\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		
		$message  = "
			<strong>Имя:</strong> ".$name."<br><br>
			<strong>Телефон:</strong> ".$tel."<br><br>
			<strong>Сообщение:</strong> ".$mes."<br><br>
		";
		
		mail( $to, $subject, $message, $headers );
		
	}
	
	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в салон кухонь «Furniture». Мы ответим Вам в&#160;ближайшее время.</p>';
	
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>