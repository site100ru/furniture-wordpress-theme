<?php
	//ini_set('error_reporting', E_ALL);
	//ini_set('display_errors', 1);
	//ini_set('display_startup_errors', 1);
	session_start();
	$win = "true";
	
	// Вспомогательная функция для отправки почтового сообщения с вложением 
	function send_mail($to, $thm, $html, $path) { 
		$fp = fopen($path,"r"); 
		
		/* Если нет файла */
		if ( !$fp ) { 
			print "Файл $path не может быть прочитан"; 
			exit(); 
		}

		$file = fread( $fp, filesize( $path ) ); 
		fclose( $fp ); 

		$boundary = "--".md5(uniqid(time())); // генерируем разделитель 

		$headers = "MIME-Version: 1.0\r\n";
		
		$headers .= "From: info@furniture.ru\r\n";

		$headers .="Content-Type: multipart/mixed; boundary=\"$boundary\"\n"; 

		$multipart = "--$boundary\n";

		$kod = 'utf-8'; // или $kod = 'windows-1251 или koi8-r'; 

		$multipart .= "Content-Type: text/html; charset=$kod\n"; 

		$multipart .= "Content-Transfer-Encoding: Quot-Printed\n\n"; 

		$multipart .= "$html\n\n"; 

		$message_part = "--$boundary\n"; 

		$message_part .= "Content-Type: application/octet-stream\n"; 

		$message_part .= "Content-Transfer-Encoding: base64\n"; 

		$message_part .= "Content-Disposition: attachment; filename = \"".$path."\"\n\n"; 

		$message_part .= chunk_split(base64_encode($file))."\n"; 

		$multipart .= $message_part."--$boundary--\n"; 


		/**/
		if ( !mail( $to, $thm, $multipart, $headers ) ) { 
			echo "К сожалению, письмо не отправлено"; 
			exit();
		}
	}
	
	
	// Подключаем WordPress для доступа к функциям темы
	require_once('../../../wp-load.php');
	
	// Получаем email адреса из настроек темы
	$mail_to = "vasilyev-r@mail.ru"; // Адрес доставки почты по умолчанию
	
	// Собираем все email адреса из админки
	$emails_from_admin = array();
	
	//  email из повторителя
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
		$mail_to = implode(', ', $emails_from_admin);
	}
	
			
	$name = $_POST['name'];
	$tel = $_POST['tel'];
	if ( isset( $_POST[ 'product' ] ) ) { $product = $_POST[ 'product' ]; } else { $product = ''; }
	if ( isset( $_POST[ 'mes' ] ) ) { $mes = $_POST['mes']; } else { $mes = ''; }
	
	$picture = "";
	$thm = "Заявка на расчет стоимости с сайта furniture.ru"; // Тема письма
	
	
	if ( isset( $_FILES['mail_file']['type'] ) ) { $file_type = $_FILES['mail_file']['type']; }
	if ( isset( $_FILES['mail_file']['size'] ) ) { $file_size = $_FILES['mail_file']['size']; }
	
	/*
	if ( isset( $_FILES['mail_file']['type'] ) ) {
		$file_type = $_FILES['mail_file']['type'];
	}
	
	if ( isset( $_FILES['mail_file']['size'] ) ) {
		$file_size = $_FILES['mail_file']['size'];
	}*/
	
	
	
	// Используем, если отправка файла обязательная
	/* Если поле выбора вложения не пустое - закачиваем его на сервер
	if ( !empty( $_FILES['mail_file']['tmp_name'] ) and ( $file_type == 'image/png' OR  $file_type == 'image/jpeg' OR $file_type ==  'application/pdf' ) and ( $file_size < 5120000 ) ) { 
		// Закачиваем файл 
		$path = 'mail-img/'.$_FILES['mail_file']['name']; 
		if (copy($_FILES['mail_file']['tmp_name'], $path)) $picture = $path; 
	} else {
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p class="text-light">Неправильный формат или размер файла. Файл должен быть в формате .jpg, .jpeg, .png или .pdf и размером не более 5 МБ. Пожалуйста повторите попытку.</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);
		exit();
	} */
	
	// Используем, если отправка файла НЕ обязательная
	// Если изображение есть то проверяем его на соответствие требованиям
	// Если нет изображение, то ничего не делаем
	if ( !empty( $_FILES['mail_file']['tmp_name'] ) ) { 
		if ( ( $file_type == 'image/png' OR  $file_type == 'image/jpeg' OR $file_type ==  'application/pdf' OR $file_type == 'application/octet-stream' ) and ( $file_size < 5120000 ) ) {
			// Закачиваем файл 
			$path = 'mail-img/'.$_FILES['mail_file']['name']; 
			if ( copy($_FILES['mail_file']['tmp_name'], $path) ) { $picture = $path; }
		} else {
			$_SESSION['win'] = 1;
			$_SESSION['recaptcha'] = '<p class="text-light">Вы пытаетесь загрузить неподходящий формат или размер файла. Файл должен быть в формате .jpg, .jpeg, .png, .pdf или .heic и размером не более 5 МБ. Пожалуйста повторите попытку.</p>';
			header("Location: ".$_SERVER['HTTP_REFERER']);
			exit();
		}
	}
	
	
	/* Отправляем почтовое сообщение  */
	if ( empty( $picture ) ) {
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "From: info@furniture.ru\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";
		$msg = "
			<strong>Имя:</strong> ".$name."<br><br>
			<strong>Телефон:</strong> ".$tel."<br><br>
			<strong>Продукт:</strong> ".$product."<br><br>
			<strong>Сообщение:</strong> ".$mes."<br><br>
		";
		mail( $mail_to, $thm, $msg, $headers );
	} else {
		$msg = "
			<strong>Имя:</strong> ".$name."<br><br>
			<strong>Телефон:</strong> ".$tel."<br><br>
			<strong>Продукт:</strong> ".$product."<br><br>
			<strong>Сообщение:</strong> ".$mes."<br><br>
			<strong>В прикрепленном файле находится изображение изделия или схематично нарисованный рисунок!</strong>
		";
		send_mail($mail_to, $thm, $msg, $picture);
	}
	
	$_SESSION['win'] = 1;
	$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в салон кухонь «Furniture». Мы ответим Вам в&#160;ближайшее время.</p>';
	header("Location: ".$_SERVER['HTTP_REFERER']);
		
?>