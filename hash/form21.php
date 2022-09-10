<?php
	/* @var $lf */		//из config.php
	/* @var $link */	//из connectMyDB.php
	/* @var $login */	//   login
	/* @var $pswd */	//   password
	$fields_regexp = [
			'name' => '/^([a-zA-Zа-яА-Я0-9\' -]){1,40}$/u',
			'login' => '/^([a-zA-Z0-9-_]){2,20}$/u',
			'email' => '',
			'password' => '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z].{6,}$/u',
	];

	require_once '../config.php';    				// д/з 21
	require_once '../connectMyDB.php';
?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="style.css" rel="stylesheet">
	<title>Урок 19</title>
</head>
<body>

<div class="contact-us">
	<form name="userFom" method="post" enctype="multipart/form-data"
		  action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
		<label for="user_name">Имя<span class="error"><input type="text" name="user_name" id="user_name"></label>
		<label for="user_login">Логин<span class="error"><input type="text" name="user_login" id="user_login"></label>
		<label for="user_email">E-mail<span class="error"><input type="text" name="user_email" id="user_email"></label>
		<label for="user_pswd">Пароль<span class="error"><input type="text" name="user_pswd" id="user_pswd"></label>
		<input type="submit" value="Регистрация">
	</form>

	<b>Ввели</b><br>
	Логин: <?= $login . $lf; ?>
	Пароль: <?= $pswd . $lf; ?>
</div>

</body>
</html>
