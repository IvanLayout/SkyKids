<?php

	$phone = '';
	$name = '';

	if (isset($_POST["phone"])) {

		$phone = $_POST['phone'];
		$name = $_POST['name'];

		$name = trim(urldecode(htmlspecialchars($name)));

		if (strlen($name)) {
			$name = "Имя: {$name}. ";
		}


		$adminEmail = 'vanek1109@gmail.com';
		$message = "{$name}Телефон: {$phone}. ";
		$subject = "Заявка с формы en";

		mail($adminEmail, $subject, $message);
	}

?>