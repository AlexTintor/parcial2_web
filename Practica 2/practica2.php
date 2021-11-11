<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Practica 2. PHP dentro de HTML</title>
</head>
<body>
	<?php
		$numero = rand(1,4); 
		$color = ["#4336f4","#36f443","#f44336","#c49361"];
		$numcolor = rand(0,3);

		echo "Numero generado :" . $numero . "<br>";
		echo "<div style='color:".$color[$numcolor]."'>Color generado</div>";

		if ($numero == 1) {
	?>
		<h1 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h1>
		
	<?php } elseif ($numero == 2) { ?>
		<h1 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h1>
	<?php } elseif ($numero == 3) { ?>
		<h1 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h1>
	<?php } elseif ($numero == 4) { ?>
		<h1 style="color: <?php echo $color[$numcolor]; ?>">Título de la página</h1>
	<?php } ?>
	<footer><b style="color:#B95ED6"> - Alex Fernando Bojórquez Rojas 5AVP - </b></footer>
</body>
</html>