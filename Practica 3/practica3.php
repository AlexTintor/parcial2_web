<?php 

	$nombre = $_GET["nombre"];
	echo "El mobre del cliente es: " . $nombre . "<br><br>";

	$edad = $_GET["edad"];
	echo "La edad es de: " . $edad . " años.<br><br>";

	$correo = $_GET["correo"];
	echo "El correo es: " . $correo . "<br><br>";

	$fecha_nacimiento = $_GET["fecha_nacimiento"];
	echo "Su fecha de nacimiento es: " . $fecha_nacimiento . "<br><br>";

	$sexo = $_GET["sexo"];
	echo "El sexo es: " . $sexo . "<br><br>";

	$areas = $_GET["areas"];
	
	echo "Las areas de preferencia del cliente son <br>";
	for ($i=0; $i < count($areas) ; $i++) { 
		echo $areas[$i] . "<br>";	
	}
	

 ?>