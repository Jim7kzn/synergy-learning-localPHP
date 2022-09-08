<?php
	/* @var $lf */		//из config.php
	/* @var $link */	//из connectMyDB.php

	require_once 'config.php';    				// д/з 16
	require_once 'connectMyDB.php';
	$jobNum = 0;

	newHomeWork(++$jobNum, true);		// задание 1
	$orderDate = '2022-09-08';					//Выбор даты
	// сортировка заказов от новых к старым
	// (совершенно необязательное действие, тем более при фильтре)
	$strSQL = "SELECT `clients`.`clientName`, `clients`.`clientPhone`, 
       				`materials`.`material_name`, `products`.`product_name`,
       				`orders`.`order_date`
				FROM `orders`
					LEFT JOIN `clients` ON `orders`.`client_id` = `clients`.`id`
					LEFT JOIN `materials` ON `orders`.`material_id` = `materials`.`id`
					LEFT JOIN `products` ON `orders`.`product_id` = `products`.`id`
				WHERE `orders`.`order_date` = '{$orderDate}'
				ORDER BY `orders`.`order_date` DESC, `orders`.`id`";

	$result = mysqli_query($link, $strSQL);
	if ($result === false) {
		out_db_error($link);
	} else {
		$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
		print_r("{$lf}Список заказов, совершённых {$orderDate}{$lf}");
		foreach ($data as $item) {
			print_r("{$lf}Имя клиента: {$item['clientName']};");
			print_r("{$lf}Телефон: {$item['clientPhone']};");
			print_r("{$lf}Товар: {$item['product_name']};");
			print_r("{$lf}Материал: {$item['material_name']};{$lf}");
		}
	}
