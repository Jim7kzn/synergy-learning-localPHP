<?php
// д/з 4

	$jobNum = 1;
	$lf = "<br>";
	$separator = "{$lf}<hr>";
	$prefix = "<b><i>";
	$suffix = "</i></b>{$lf}";

//2
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";

	$currentVariable = 0;
	echo "Начальное значение \$currentVariable = {$currentVariable}{$lf}";
	$currentVariable += 7;
	echo "После операции '+ 7' значение \$currentVariable = {$currentVariable}{$lf}";
	$currentVariable *= 4;
	echo "После операции '* 4' значение \$currentVariable = {$currentVariable}{$lf}";
	$currentVariable -= 8;
	echo "После операции '- 8' значение \$currentVariable = {$currentVariable}{$lf}";
	$currentVariable /= 4;
	echo "После операции '/ 4' значение \$currentVariable = {$currentVariable}{$lf}";
	$currentVariable **= 3;
	echo "После операции '** 3' значение \$currentVariable = {$currentVariable}{$lf}";
	$currentVariable %= 3;
	echo "После операции '% 3' значение \$currentVariable = {$currentVariable}{$lf}";

//3
	echo "{$separator}{$prefix}Задание&nbsp;" . (++$jobNum) . ".{$suffix}";

	$val1 = 50;
	$val2 = 70;

	$pupil = 'val1';
	$student = 'val2';

	echo "значение \$val1 = {$val1}{$lf}";
	echo "значение \$pupil = {$pupil}{$lf}";
	echo "значение \${\$pupil} = ${$pupil}{$lf}";
	echo "значение \$val2 = {$val2}{$lf}";
	echo "значение \$student = {$student}{$lf}";
	echo "значение \${\$student} = ${$student}{$lf}";
