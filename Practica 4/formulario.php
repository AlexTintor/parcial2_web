<?php 
	$nombre = $_GET["nombre"];
	$p1 = $_GET["p1"];
	$p2 = $_GET["p2"];
	$p3 = $_GET["p3"];
	$p4 = $_GET["p4"];
	$p5 = $_GET["p5"];
	$p6 = $_GET["p6"];
	$p7 = $_GET["p7"];
	$p8 = $_GET["p8"];
	$p9 = $_GET["p9"];
	$p10 = $_GET["p10"];
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Formulario</title>
	<style>
		h1{color:darkblue; text-align:center;}
		hr{color:darkgray; width: 70%; border-width:6px;}
		label{color:#228B22;}
		b{color:black;}
		.formulario{margin-top:30px; padding: 20px; box-shadow: 0 0 20px 1px rgba(0,88,88,0.3); }
		.c1{color:darkblue;}
		footer{color:#B95ED6;}
	</style>
</head>
<body>
	<h1>Test Escolar</h1><hr>
	<div class="row">
		<div class="col-2"></div>
		<div class="col-8">

			<h2 style="text-align:center; color:#FF7F50">Preguntas de cultura general</h2><h2 style="text-align:center;color:#009999">Respuestas</h2>
			<h3 style="text-align: right; color: red">Calificación: <?php 
				
				$calf1 = 0;
				$calf2 = 0;
				$calf3 = 0;
				$calf4 = 0;
				$calf5 = 0;
				$calf6 = 0;
				$calf7 = 0;
				$calf8 = 0;
				$calf9 = 0;
				$calf10 = 0;

				if ($p1 == "Fruta") {
					$calf1 = 1;
				}
				if ($p2 == "Hans Lippershey") {
					$calf2 = 1;
				}
				if ($p3 == "25,000") {
					$calf3 = 1;
				}
				if ($p4 == "pensar") {
					$calf4 = 1;
				}
				if ($p5 == "1969") {
					$calf5 = 1;
				}
				if ($p6 == "nilo" or $p6 == "Nilo") {
					$calf6 = 1;
				}
				if ($p7[0] == "Dulce" && $p7[1] == "Umami") {
					$calf7 = 1;
				}
				if ($p8[0] == "Java" && $p8[1] == "C++") {
					$calf8 = 1;
				}
				if ($p9[0] == "Solar" && $p9[1] == "Eolica") {
					$calf9 = 1;
				}
				if ($p10 == "2021-12-25") {
					$calf10 = 1;
				}
				$calf = $calf1+$calf2+$calf3+$calf4+$calf5+$calf6+$calf7+$calf8+$calf9+$calf10;
				echo $calf;
				 ?></h3>

			<br>
			<form class="formulario">
				<h5 style="box-sizing: border-box;">
				<label for="nombre">Nombre Completo:</label>
				<?php $nombre = $_GET["nombre"]; echo($nombre); ?><br><br>

				<label for="p1">1. ¿Naranja es el color o la fruta?</label><br>
				<h5 class="c1">Respuesta Seleccionada:  <?php if($calf1 == 1){echo "<b style='color:#00FF00'>" . $p1 . "</b>";}else{echo "<b style='color:red'>".$p1."</b>";} ?><br>
				<h5>Respuesta Correcta: <b>Fruta.</b></h5><h5><br>
				
				<label for="p2">2. ¿Quine invento el telescopio?</label><br>
				<h5 class="c1">Respuesta Seleccionada:  <?php if($calf2 == 1){echo "<b style='color:#00FF00'>".$p2."</b>";}else{echo "<b style='color:red'>" .$p2. "</b>";} ?><br>
				<h5>Respuesta Correcta: <b>Hans Lippershey.</b></h5><h5><br>

				<label for="p3">3. ¿Cuantas veces parpadea una persona en una semana?</label><br>
				<h5 class="c1">Respuesta Seleccionada:  <?php if($calf3 == 1){echo "<b style='color:#00FF00'>".$p3." veces</b>";}else{echo "<b style='color:red'>".$p3." veces</b>";} ?><br>
				<h5>Respuesta Correcta: <b>25,000 veces.</b></h5><h5><br>

				<label for="p4">4. Programar es aprender a </label> <b>Pensar.</b> <h5 class="c1">Respuesta Seleccionada:  <?php if($calf4 == 1){echo "<b style='color:#00FF00'>".$p4."</b>";}else{echo "<b style='color:red'>".$p4."</b>";} ?>.  <br><br>

				<label for="p5">5. El 16 de Julio de </label> <b>1969</b> <label> el hombre llego por primera vez a la luna.</label> <h5 class="c1">Respuesta Seleccionada:  <?php if($calf5 == 1){echo "<b style='color:#00FF00'>".$p5."</b>";}else{echo "<b style='color:red'>".$p5."</b>";} ?><br><br>

				<label for="p6">6. El rio </label> <b>Nilo</b> <label for="">es el rio más largo del mundo, este se encuentra en Afríca.</label><h5 class="c1">Respuesta Seleccionada:  <?php if($calf6 == 1){echo "<b style='color:#00FF00'>".$p6."</b>";}else{echo "<b style='color:red'>".$p6."</b>";} ?><br><br>

				<label for="p7">7. Estos son 2 de los sabores primarios.</label><br>
				<h5 class="c1">Respuestas seleccionadas: <br>
				<?php 
					if ($calf7 == 1) {
						for ($i=0; $i < count($p7) ; $i++) { 
							echo "<b style='color:#00FF00'>";
							echo $p7[$i] . "<br></b>";	
						}
					}else{
						for ($i=0; $i < count($p7) ; $i++) { 
							echo "<b style='color:red'>";
							echo $p7[$i] . "<br></b>";	
						}
					}
				?>
				<h5>Respuestas correctas: <b>Dulce, Umami.</b> <br><br>
				

				<label for="p8">8. Se consideran lenguajes de programación.</label><br>
				<h5 style="color:darkblue">Respuestas seleccionadas: <br>
				<?php 
					if ($calf8 == 1) {
						for ($i=0; $i < count($p8) ; $i++) { 
							echo "<b style='color:#00FF00'>";
							echo $p8[$i] . "<br></b>";	
						}
					}else{
						for ($i=0; $i < count($p8) ; $i++) { 
							echo "<b style='color:red'>";
							echo $p8[$i] . "<br></b>";	
						}
					}
				?>
				<h5 style="color:black">Respuestas correctas: <b>Java, C++.</b> <br><br>

				<label for="p9">9. Son energias renovables.</label><br>
				<h5 style="color:darkblue">Respuestas seleccionadas: <br>
				<?php 
					if ($calf9 == 1) {
						for ($i=0; $i < count($p9) ; $i++) { 
							echo "<b style='color:#00FF00'>";
							echo $p9[$i] . "<br></b>";	
						}
					}else{
						for ($i=0; $i < count($p9) ; $i++) { 
							echo "<b style='color:red'>";
							echo $p9[$i] . "<br></b>";	
						}
					}
				?>
				<h5 style="color:black">Respuestas correctas: <b>Solar, Eolica.</b> <br><br>

				<label for="p10">10. ¿En que fecha es Navidad de 2021?</label><br>
				<h5 style="color:darkblue">Respuesta Seleccionada:  <?php if($calf10 == 1){echo "<b style='color:#00FF00'>".$p10."</b>";}else{echo "<b style='color:red'>".$p10."</b>";} ?><br>
				<h5>Respuesta Correcta: <b>2021-12-25.</b></h5><h5><br>

				</h5>
				<box style="color:red;background-color:lightpink; width:80px; height:40px;"><b style="color:red"> Cerrar </b></box><br><br>

				



			</form><br><br>
		</div>
	</div>
	
	<footer><b style="color:#B95ED6"> - Alex Fernando Bojórquez Rojas 5AVP - </b></footer>
</body>
</html>
