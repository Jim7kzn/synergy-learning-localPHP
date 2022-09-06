<?php
// д/з 5
	$jobNum = 2;
	$lf = "<br>";
	$separator = "{$lf}<hr>";
	$prefix = "<b><i>";
	$suffix = "</i></b>{$lf}";

	function MySquare($width = 0, $height = 0) {
		$lf = "<br>";
		print_r("Функция вычисления площади прямоугольника {$lf}");
		print_r("Ширина - {$width} {$lf}");
		print_r("Высота - {$height} {$lf}");
		return $width * $height;
	}

//3
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$width = rand(1, 10);
	$height = rand(1, 10);
	$square = MySquare($width, $height);
	print_r("Площадь прямоугольника {$width}x{$height} = {$square} {$lf}");

//4
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$leg1 = rand(1, 10);
	$leg2 = rand(1, 10);
	print_r("Гипотенуза прямоугольного с катетами {$leg1} и {$leg2} = " .
			round(hypot($leg1, $leg2), 2) . " {$lf}");

//5
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	print_r("Случайное целое число в диапазоне 67...200 - " . rand(67, 200) . " {$lf}");

//6
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$dec = rand(1, 7);
	$legMin = 67;			// rand(1, 10);
	$legMax = 200;			// rand(1, 10);
	$rnd = $legMin + rand( 0, ($legMax - $legMin) * pow(10, $dec) ) / pow(10, $dec);
	print_r("Случайное дробное число в диапазоне 67...200 (знаков после запятой {$dec}) - " . $rnd . " {$lf}");
