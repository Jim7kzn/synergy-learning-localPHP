<?php
	/* @var $greeting */
	/* @var $persons */
	/* @var $nRow */
	require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Мой проект. Тема 13</title>
	<link href="style.css" rel="stylesheet">
</head>

<body>

<h1 class="greeting"><?= $greeting ?></h1>

<h3 class="date"><?= "Сегодня: " . date('d-m-Y') ?></h3>

<table class="table">
	<thead>
	<tr>
		<th>№</th>
		<th>ФИО</th>
		<th>E-mail</th>
		<th>Пол</th>
		<th>Год<br/>рождения</th>
	</tr>
	</thead>

	<tbody>
	<?php
		foreach ($persons as $person) {?>
			<tr>
				<td><?= ++$nRow ?></td>
				<td><?= $person['fio'] ?></td>
				<td><?= $person['email'] ?></td>
				<td><?= $person['gender'] ?></td>
				<td><?= $person['birthYear'] ?></td>
			</tr>
	<?php
		}
	?>
	<tfoot>
	<tr>
		<td colspan="5">Итого: <?= $nRow ?> </td>
	</tr>
	</tfoot>

</table>

</body>
</html>