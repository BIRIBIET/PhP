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
	'short' => '<img src="images4.jpg">',
	'long' => 'В Алтае очень плохая погода...'

	],
	[

		'title' => 'Новости',
	'short' => '<img src="images2.jpg">',
	'long' => 'Сегодня в Алтае Мужщина напал на инвалида...',],
	[
'title' => 'Новости MAJOR',
	'short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem, ipsum iste praesentium consectetur veniam nobis libero dicta minimas',
	'long' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur vitae optio possimus iste officiis neque ipsa ad, adipisci accusantium soluta, eos, sed saepe similique, quam repellat. Incidunt quisquam, dolores minus.',
	],
	[
'title' => 'Игра и риск',
	'short' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque autem, ipsum iste praesentium consectetur veniam nobis libero dicta minimas',
	'long' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur vitae optio possimus iste officiis neque ipsa ad, adipisci accusantium soluta, eos, sed saepe similique, quam repellat. Incidunt quisquam, dolores minus.',
	],
];

 ?>
<div class="main">
	<h1>БЛОГ</h1>
	<hr>
	<?php 
	for ($i=0; $i < count($database); $i++) {
		echo '<h1>' . $database[$i]['title'] . '</h1> '; 
		echo '<p>' . $database[$i]['short'] . '</p>';
		echo $database [$i]['long'];
		echo '<a href="page.php?index=' . $i . '">Далее</a>';
		
	}
	  ?>
	
</div>	

</body>
</html>
