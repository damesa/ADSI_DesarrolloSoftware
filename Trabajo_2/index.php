<!DOCTYPE html>
<html>
<head>
	<title>Graficas</title>
</head>
<body>
<h1>Grafica1</h1>
<?php 
	//mostrar errores true
 ini_set('display_errors', true);
 //mostrar todos los errores
 error_reporting(E_ALL);
	require 'Tabla.php';
	$tabla1 = new Tabla(
			"Resultado del uso de instrumentos musicales",
			"cual es el mas usado",
			"450",
			"Esta vaina es de mentiras",
			"pie"
		);
	echo $tabla1->dibujar();
 ?>
<h1>Grafica2</h1>
<img src="bar.php">
</body>
</html>

<div class="grafica">
	<h1 class="titulo"></h1>
	<h2 class="subtitulo"></h2>	
	<div class="descripcon"></div>
	<figure>
	<img src="">
	</figure>
	<p class="nota"></p>
</div>