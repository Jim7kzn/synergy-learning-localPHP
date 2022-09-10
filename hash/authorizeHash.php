<?php
	/** @var $lf */
	/** @var $link */

	require_once "../config.php";
	require_once "../connectMyDB.php";
	session_start();

	$pageFrom = substr(strrchr($_SERVER ['HTTP_REFERER'], '/'), 1);
	if ($pageFrom === 'privateHash.php') {
		$_SESSION = [];
		$_GET = [];
	}
	$title = 'Аутентификация';

	if (!isset($_GET['submit'])) {
		echo "
			<head><title>$title</title></head>

			<form>
				Login: 	  <input type='text' name='login'>
				Password: <input type='password' name='pswd'>
				<input type='submit' name='submit' value='Войти'>
				{$lf}{$lf}<a href='indexHash.php'>Главная страница</a>{$lf}
			</form>
		";
	} else {
		$data = user_search($link);
		if ($data[0]['user_login'] == 'quit') {
			unset($_SESSION['logged_user_id']);
			unset($_SESSION['logged_user_name']);
			$_GET = [];
			header('Location: indexHash.php');
		}

		if (!$data) {
			unset($_SESSION['logged_user_id']);
			unset($_SESSION['logged_user_name']);
			$_GET = [];
			echo "Не угадал! {$lf}";
			echo "{$lf}<a href='authorizeHash.php'>Попробуй ещё!</a>{$lf}{$lf}";
		} else {
			$_SESSION['logged_user_id'] = $data[0]['id'];
			$_SESSION['logged_user_name'] = $data[0]['user_name'];
			header('Location: privateHash.php');
		}
	}

	print_r($lf . session_id());
	print_r($lf . session_name() . $lf);
	myDebug($_SESSION);


