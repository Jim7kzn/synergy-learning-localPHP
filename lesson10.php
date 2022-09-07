<?php
	require_once 'config.php';    				// д/з 10
	$jobNum = 0;

	newHomeWork(++$jobNum, true);		// задание 1
	$dateNew = "2023-03-08";
	$sec = strtotime($dateNew) - strtotime(date("Y-M-d"));
	echo intval($sec / 3600 / 24);

	newHomeWork(++$jobNum);				// задание 2
	$dateNew = "2022-02-23";
	echo date("d-m-Y", strtotime($dateNew));

	newHomeWork(++$jobNum);				// задание 3
	$dateNew = date("Y", time()) . "-01-01";
	$sec = strtotime(date("Y-M-d")) - strtotime($dateNew);
	echo intval($sec / 3600 / 24) + 1;
