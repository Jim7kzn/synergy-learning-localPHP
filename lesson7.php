<?php
	require_once 'config.php';    // д/з 7
	$jobNum = 0;

	function inQuarter(int $min= 0) {
		return (int) ($min / 15) + 1;
	}

	function whatSeason(int $month = 0) {
		if ($month < 1 || $month > 12) return null;
		switch ($month) {
			case $month > 2 && $month < 6:
				$season = "Весна";
				break;
			case $month > 5 && $month < 9:
				$season = "Лето";
				break;
			case $month > 8 && $month < 12:
				$season = "Осень";
				break;
			default:
				$season = "Зима";
				break;
		}
		return $season;
	}

	function degree2or3(int $x = 0) {
		return pow($x, ($x % 2 === 0) ? 2 : 3);
	}

	function orderABCmax(int $x = 0) {
		$c = (int) $x % 10;
		$b = (int) (($x - $c) / 10) % 10;
		$a = (int) ($x - $b * 10 - $c) / 100;

		if ($a >= $b && $a >= $c) {
			$a *= 100;
			if ($b >= $c) $b *= 10;
			else $c *= 10;

		} elseif ($b >= $a && $b >= $c) {
			$b *= 100;
			if ($a >= $c) $a *= 10;
			else $c *= 10;

		} elseif ($c >= $a && $c >= $b) {
			$c *= 100;
			if ($a >= $b) $a *= 10;
			else $b *= 10;

		} else {
			$a *= 100;
			$b *= 10;
		}
		return $a + $b + $c;
	}

//1
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$time = rand(0, 59);
	print_r("Минуты {$time} - в " . inQuarter($time) . "-й четверти часа.{$lf}");

//2
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$month = rand(0, 13);
	$season = whatSeason($month);
	print_r((is_null($season) ? "Месяца с номером $month не существует." :
					"Месяц {$month} - это {$season}.") . $lf);

//3
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$x = rand(-10, 10);
	print_r("Расчётная степень числа {$x} = " . degree2or3($x) . ".{$lf}");

//4
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$x = rand(0, 999);
	print_r("Исходное число: {$x}. Максимальное из его цифр: " . orderABCmax($x) . ".{$lf}");
