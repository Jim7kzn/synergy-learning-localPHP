<?php
	require_once 'config.php';		// д/з 6
	$jobNum = 1;

	function is18($age = 17) {
		return ($age >= 18 && $age <= 27 ? '' : 'не') . 'призывной';
	}

	function isEqual($x = null, $y = null) {
		return ($x === $y ? '' : 'не') . 'равны';
	}

	function isPositive($x = null, $y = null, $z = null) {
		return $x > 0 || $y > 0 || $z > 0;
	}

	function is15($x = 0, $y = 0) {
		return ($x + $y) > 15;
	}

//2
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$age = rand(1, 60);
	print_r("Возраст {$age} - " . is18($age) . ".{$lf}");

//3
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$x = rand(-3, 3);
	$y = rand(-3, 3);
	print_r("Значения {$x} и {$y} " . isEqual($x, $y) . ".{$lf}");

//4
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$x = rand(-5, 5);
	$y = rand(-5, 5);
	$z = rand(-5, 5);
	$res = isPositive($x, $y, $z);
	print_r("В наборе [{$x}, {$y}, {$z}] положительное значение " . ($res ? 'присутствует' : 'отсутствует') . ".{$lf}");

//5
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$x = rand(-20, 20);
	$y = rand(-20, 20);
	$res = is15($x, $y);
	print_r("Сумма {$x} и {$y} " . ($res ? '' : 'не ') . "больше 15.{$lf}");
