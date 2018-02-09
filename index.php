<html>
	<head>
		<title>Работа с json</title>
		<meta charset="utf-8">
	</head>
<?php
$a = file_get_contents(__DIR__ . '/friends.json');
$friends = json_decode($a, true);

?>
	<body>
		<table>
			<tr>
				<td>Имя</td>
				<td>Фамилия</td>
				<td>Адрес</td>
				<td>Номер телефона</td>
			</tr>
			<?php foreach ($friends as $friend): ?>
			<tr>
				<td><?php echo $friend ['firstName'];?></td>
				<td><?php echo $friend ['lastName'];?></td>
				<td><?php echo $friend ['address'];?></td>
				<td><?php echo $friend ['phoneNumber'];?></td>
			</tr>
			<?php endforeach ?>
		</table>
	</body>
</html>

