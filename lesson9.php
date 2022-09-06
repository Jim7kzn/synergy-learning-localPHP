<?php
	require_once 'config.php';    // д/з 9
	$jobNum = 0;

//1
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$txt = <<<ASIS
<i>"Аптеку позабудь ты для венков лавровых
И не мори больных, но усыпляй здоровых."</i>
ASIS;
	print_r(nl2br($txt) . $lf);

//2
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$str = "010122";
	$str = mb_substr(chunk_split($str, 2, '.'), 0,6) .
			date("Y", time());
	print_r($str . $lf);

//3
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$strSrc = "Я считаю до пяти";
	$strSearch1 = "пяти";
	$strSearch2 = "шести";
	print_r("В строке \"{$strSrc}\" искомая строка \"{$strSearch1}\" ");
	print_r((( strpos($strSrc, $strSearch1) !== false ) ? "присутствует" : "отсутствует") . ".{$lf}");
	print_r("В строке \"{$strSrc}\" искомая строка \"{$strSearch2}\" ");
	print_r((( strpos($strSrc, $strSearch2) !== false ) ? "присутствует" : "отсутствует") . ".{$lf}");

//3
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";
	$strSrc = "C:/OpenServer/domains/localhost/index.php";
	$res = substr(strrchr($strSrc, '/'), 1);
	print_r("В строке \"{$strSrc}\" имя файла {$prefix}{$res}{$suffix}");
