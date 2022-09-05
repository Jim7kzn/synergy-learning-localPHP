<?php
	$jobNum = 0;
	$lf = "<br>";
	$separator = "{$lf}<hr>";
	$prefix = "<b><i>";
	$suffix = "</i></b>{$lf}";

//1
	$jobNum ++;
	echo "{$separator}{$prefix}Задание&nbsp;{$jobNum}.{$suffix}";

	$hello = "Hello";
	$name = "Anna";

	echo "{$hello}, {$name}!{$lf}";

//2
	$jobNum ++;
	echo "{$separator}{$prefix}Задание&nbsp;{$jobNum}.{$suffix}";

	$str1 = '<i>"Аптеку позабудь ты для венков лавровых';
	$str2 = "И не мори больных, но усыпляй здоровых.\"</i>";

	echo "{$str1}{$lf}";
	echo "{$str2}{$lf}";

//3
	$jobNum ++;
	echo "{$separator}{$prefix}Задание&nbsp;{$jobNum}.{$suffix}";

	$secondsPerMinute = 60;
	$minutesPerHour = 60;
	$howSeconds = $secondsPerMinute * $minutesPerHour;

	echo "В часе {$howSeconds} секунд.{$lf}";



