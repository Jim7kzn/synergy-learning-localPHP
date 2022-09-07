<?php
	$lf = "<br>";
//	$separator = "{$lf}<hr>";
//	$prefix = "<b><i>";
//	$suffix = "</i></b>{$lf}";
//	$redStr = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

	function myDebug($arr, $die = false){
		echo '<pre>' . print_r($arr, true) . '</pre>';
		if ($die) die;
	}

	function newHomeWork($numJob, $fl = false) {
		$lf = "<br>";
		$separator = (!$fl ? $lf . $lf : '') . "<hr>";
		$prefix = "<b><i>";
		$suffix = "</i></b>{$lf}";
		echo "{$separator}{$prefix}Задание&nbsp;{$numJob}.{$suffix}";
	}

