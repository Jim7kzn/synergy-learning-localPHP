<?php
	require_once "../config.php";
	/** @var $title */

	session_start();
	$title = "Закрытая информация";

	if (!isset($_SESSION['logged_user_id'], $_SESSION['logged_user_name'])) {
		header('Location: authorizeHash.php');
	}
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


<h1>Здравствуйте!</h1>

<p>Это очень секретная страница с закрытыми данными</p>

<a href="indexHash.php">Главная страница</a>
<br>
<a href="authorizeHash.php">Выход</a>
<br>
<br>

<br>
<?= session_id(); ?><br>
<?= session_name(); ?><br>
<?php myDebug($_SESSION) ?>
<br>

</body>
</html>
