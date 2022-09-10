<?php
	require_once "../config.php";
	/** @var $title */

	session_start();

	$title = "Главная страница";

?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="style.css" rel="stylesheet">
	<title><?= $title ?></title>
</head>
<body>

<h1>Привет!</h1>

<h2>Это основная страница по упражнению</h2>

<h3><a href="privateHash.php">Закрытая информация</a></h3>
<br>

<br>
<?= session_id(); ?><br>
<?= session_name(); ?><br>
<?php myDebug($_SESSION) ?>

</body>
</html>

