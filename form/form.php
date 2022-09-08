<?php
	$lf = "<br>";

	if (isset($_POST['field1'], $_POST['field2'], $_POST['field3'], $_POST['field4'] )) {
		print_r("Любимый город " . (mb_strlen($_POST['field1']) > 0 ? "- {$_POST['field1']}" : "может спать спокойно!") . $lf);
		print_r("Год {$_POST['field2']} - " . (($_POST['field2'] % 4) === 0 ? "" : "не") . "високосный." . $lf);
		print_r("Дате {$_POST['field3']} соответствует день недели - " . date("l", strtotime($_POST['field3'])) . $lf);
		$sec = strtotime($_POST['field4']) - strtotime(date("Y-M-d"));
		$sec = intval($sec / 3600 / 24);
		print_r("Дней до следующего дня рождения - {$sec}");

	} else {
		print_r("Ошибка в данных!");
	}
