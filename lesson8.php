<?php
	require_once 'config.php';    // д/з 8
	$jobNum = 3;
// массив средней температуры по Казани за август 2022
	$arrTemperature = [
			'1' => 21.8, '2' => 22.0, '3' => 22.8, '4' => 23.4, '5' => 24.0,
			'6' => 25.7, '7' => 24.6, '8' => 25.3, '9' => 25.4, '10' => 23.4,
			'11' => 21.5, '12' => 20.3, '13' => 21.9, '14' => 21.4, '15' => 22.1,
			'16' => 23.1, '17' => 23.1, '18' => 22.5, '19' => 18.9, '20' => 20.1,
			'21' => 23.1, '22' => 25.0, '23' => 24.8, '24' => 24.6, '25' => 25.2,
			'26' => 24.8, '27' => 23.3, '28' => 23.7, '29' => 25.5, '30' => 25.0,
			'31' => 23.9,
	];

	function interHello(string $name = "Аноним", string $lang = "ru") {
		$hello = ['ru' => 'Привет', 'en' => 'Hello', 'fr' => 'Salut', 'it' => 'Buongiorno', ];
		$lang = array_key_exists(mb_strtolower($lang), $hello) ? $lang : 'ru';
		return "{$hello[$lang]}, {$name}!";
	}

//4
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$arrWork = $arrTemperature;
	asort($arrWork);
	$avrTemp = array_sum($arrWork)/count($arrWork);

	print_r("Средняя температура по месяцу: " . round($avrTemp, 1) . ".{$lf}");
	print_r("Максимальные значения температуры:{$lf}");
	foreach (array_slice($arrWork, 0, 3, true) as $k => $v) {
		print_r("$redStr $k" . '.08.2022 - ' . $v . $lf);
	}
	print_r("Минимальные значения температуры:{$lf}");
	foreach (array_slice($arrWork, -3, 3, true) as $k => $v) {
		print_r("$redStr $k" . '.08.2022 - ' . $v . $lf);
	}

//5
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$arrWork = [];
	for ($i = 1; $i <= 10; $i++) {
		print_r($lf . '[');
		$tmp = [];
		for ($j = 1; $j <= 10; $j++) {
			$x = rand(1, 10);
			$tmp[] = $x;
			print_r(" $x ");
		}
		$arrWork[] = $tmp;
		print_r(']');
	}
	print_r($lf);

//6
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$arrWork = [
			['userName' => 'Ф_И_О_11', 'login' => 'login_11', 'password' => 'PaSsWoRd*11', ],
			['userName' => 'Ф_И_О_22', 'login' => 'login_22', 'password' => 'PaSsWoRd*22', ],
			['userName' => 'Ф_И_О_33', 'login' => 'login_33', 'password' => 'PaSsWoRd*33', ],
			['userName' => 'Ф_И_О_44', 'login' => 'login_44', 'password' => 'PaSsWoRd*44', ],
	];
	foreach ($arrWork as $item) {
		print_r("ФИО: <b>{$item['userName']}</b>, " .
				"$redStr логин - <i>{$item['login']}</i>, " .
				"$redStr пароль - <u>{$item['password']}</u> $lf");
	}

//7
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$sum = 0;
	for ($i = 1; $i <= 25; $i++) $sum += pow($i, 2);
	print_r("Сумма квадратов чисел от 1 до 25 = {$sum}.{$lf}");

//8
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	print_r(interHello() . $lf);
	print_r(interHello('Сергей Трофимов') . $lf);
	print_r(interHello('Jimi Hendrix', 'en') . $lf);
	print_r(interHello('Joe Dassin', 'fr') . $lf);
	print_r(interHello('Adriano Celentano', 'it') . $lf);


