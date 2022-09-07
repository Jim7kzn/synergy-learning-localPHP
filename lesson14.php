<?php
	/* @var $lf */

	require_once 'config.php';    				// д/з 14
	$jobNum = 0;

	function ob_revers($buffer) {
		return strrev($buffer);
	}

	newHomeWork(++$jobNum, true);		// задание 1
	ob_start();
	echo "Это первая строка" . $lf;
	$ob = ob_get_contents();
	ob_end_clean();

	newHomeWork(++$jobNum);				// задание 2
	echo "Это вторая строка" . $lf;
	echo $ob;

	newHomeWork(++$jobNum);				// задание 3
	ob_start('ob_revers');
		echo "Reverse string";
	ob_end_flush();

	newHomeWork(++$jobNum);				// задание 4
	echo "<b>Вложенные буферы вывода.</b>{$lf}";
	echo "Это исходный код.{$lf}";
	echo ob_get_level();
	ob_start();
		echo ob_get_level();
		ob_start();
			echo ob_get_level();
			ob_start();
				echo ob_get_level();
			ob_end_flush();
		ob_end_flush();
	ob_end_flush();
	echo  $lf . $lf;

	echo "Это итоговый код.{$lf}";
	ob_start();
		ob_start();
			ob_start();
				echo ob_get_level();
			ob_end_flush();
			echo ob_get_level();
		ob_end_flush();
		echo ob_get_level();
	ob_end_flush();
	echo ob_get_level();
	echo  $lf;
