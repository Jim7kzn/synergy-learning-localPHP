<?php
	function myDebug($arr, $die = false){
		echo '<pre>' . print_r($arr, true) . '</pre>';
		if ($die) die;
	}

	$lf = "<br>";
	$separator = "{$lf}<hr>";
	$prefix = "<b><i>";
	$suffix = "</i></b>{$lf}";
	$redStr = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
