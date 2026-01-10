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

/* Если существует переменная POST, то
if($_POST){
	// Отправляем данные в Google
    function getCaptcha($SecretKey){
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcfEa8ZAAAAAMeUv4rL-vPnvfhdpjhXmVriios6&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
	// Принимаем данные обратно
    $Return = getCaptcha($_POST['g-recaptcha-response']);
    // Если вероятность робота более 0.5, то считаем отправителя человеком и выполняем отправку почты
	if($Return->success == true && $Return->score > 0.5){*/

		$name = $_POST['name'];
        $tel = $_POST['tel'];
		$action_title = $_POST['action_title'];
		
		// Формируем тему письма с названием акции
		$subject = "Заявка на акцию: " . $action_title;
		
		// Формируем текст письма
		$message = "Потенциальный клиент с именем " . $name . " просит перезвонить на номер " . $tel . "\n\n";
		$message .= "Акция: " . $action_title;
		
		mail($to, $subject, $message);
        $_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p class="text-light">Спасибо за обращение в салон кухонь Furniture. Мы ответим Вам в&#160;ближайшее время.</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);

	/*} else {
        // Иначе считаем отправителя роботом и выводим сообщение с просьбой повторить попытку
		$_SESSION['win'] = 1;
		$_SESSION['recaptcha'] = '<p><strong>Извините!</strong><br>Ваши действия похожи на робота. Пожалуйста повторите попытку!</p>';
		header("Location: ".$_SERVER['HTTP_REFERER']);
    }
}*/
?>