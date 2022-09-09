<?php
	/* @var $lf */		//из config.php
	/* @var $link */	//из connectMyDB.php
	$fields_regexp = [
			'name' => '/^([a-zA-Zа-яА-Я0-9\' -]){1,40}$/u',
			'login' => '/^([a-zA-Z0-9-_]){2,20}$/u',
			'email' => '',
			'pswd' => '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z].{6,}$/u',
	];

	require_once '../config.php';    				// д/з 19
	$jobNum = 0;

//	newHomeWork(++$jobNum, true);			// задание 1

	function checkIn($str): string
	{
		return htmlspecialchars(stripcslashes(trim($str)));
	}

	$nameErr = $loginErr = $emailErr = $pswdErr = "";
	$name = $login = $email = $pswd = "";
	$field = $fieldUs = $fieldEr = "";

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		foreach ($fields_regexp as $k => $v) {
			$field = $k;
			$fieldUs = 'user_' . $field;
			if (isset($_POST[$fieldUs])) {
				$fieldEr = $field . 'Err';
				$$field = $$fieldEr = "";
				if (empty($_POST[$fieldUs])) {
					$$fieldEr = "Ошибка";
				} else {
					$$field = checkIn($_POST[$fieldUs]);
					if ($field !== 'email'  && !preg_match($v, $$field) ||
							$field === 'email'  && !filter_var( $$field, FILTER_VALIDATE_EMAIL)) {
						$$fieldEr = "Недопустимый набор символов!";
					}
				}
			}
		}
	}
?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="form19.css" rel="stylesheet">
	<title>Урок 19</title>
</head>
<body>

<div class="contact-us">
	<form name="userFom" method="post" enctype="multipart/form-data"
		  action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
		<label for="user_name">Имя<span class="error">*<br><?= $nameErr ;?></span> <input type="text" name="user_name" id="user_name"></label>
		<label for="user_login">Логин<span class="error">*<br><?= $loginErr ;?></span> <input type="text" name="user_login" id="user_login"></label>
		<label for="user_email">E-mail<span class="error">*<br><?= $emailErr ;?></span> <input type="text" name="user_email" id="user_email"></label>
		<label for="user_pswd">Пароль<span class="error">*<br><?= $pswdErr ;?></span> <input type="text" name="user_pswd" id="user_pswd"></label>
		<input type="submit" value="Регистрация">
	</form>

	<b>Ввели</b><br>
	Имя: <?= $name . $lf; ?>
	Логин: <?= $login . $lf; ?>
	Почта: <?= $email . $lf; ?>
	Пароль: <?= $pswd . $lf; ?>
</div>

</body>
</html>
