<?php
	function out_db_error($link, $err = -1) {
		$lf = "<br>";

		switch ($err) {
			case 1:
				print_r("{$lf}Пользователь не найден!{$lf}");
				break;
			case 2:
				print_r("{$lf}Пользователь с таким паролем не найден!{$lf}");
				break;
			default:
				print_r($lf . 'Произошла ошибка при выполнении запроса:' . $lf . mysqli_error($link));
		}
	}

	function user_search($link)  {
		$strSQL = "SELECT * FROM `users` WHERE `user_login` = '{$_GET['login']}'";
//		$strSQL = "SELECT `user_password` FROM `users` WHERE `user_login` = '{$_GET['login']}'";

		$result = mysqli_query($link, $strSQL);
		if ($result === false) {
			out_db_error($link);
		} else {
			$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
			if (!$data) {
				out_db_error($link, 1);
				return false;
			}

			if (!password_verify($_GET['pswd'], $data[0]['user_password'])) {
				out_db_error($link, 2);
				return false;
			}
			return $data;
		}
		return false;
	}

	$link = mysqli_connect('localhost', 'mysql', 'mysql', 'testdatabase');

	if ($link === false) {
		print_r("Ошибка подключения: ". mysqli_connect_error());
	} else {
		mysqli_set_charset($link,'utf8');
	}