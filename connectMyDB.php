<?php
	function out_db_error($link) {
		$lf = "<br>";
		print_r($lf . 'Произошла ожибка при выполнении запроса:' . $lf . mysqli_error($link));
	}

	$link = mysqli_connect('localhost', 'mysql', 'mysql', 'testdatabase');

	if ($link === false) {
		print_r("Ошибка подключения: ". mysqli_connect_error());
	} else {
		mysqli_set_charset($link,'utf8');
	}