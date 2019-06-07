<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
$database = [
	[
		'title' => 'Погода на завтра',
	'short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem, ipsum iste praesentium consectetur veniam nobis libero dicta minimas',
	'long' => 'WATER'

	],
	[

		'title' => 'Новости',
	'short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem, ipsum iste praesentium consectetur veniam nobis libero dicta minimas',
	'long' => '15.12.23',],
	[
'title' => 'Новости MAJOR',
	'short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem, ipsum iste praesentium consectetur veniam nobis libero dicta minimas',
	'long' => 'GG',
	],
	[
'title' => 'Игра и риск',
	'short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem, ipsum iste praesentium consectetur veniam nobis libero dicta minimas',
	'long' => 'GAME OF WAR',
	],
];
 ?>
 <?php
 $index = $_GET['index'];
 echo '<h1>' . $database[$index]['title'] . '</h1> ';
  echo $database[$index]['long'];
 ?>
</body>
</html>
