<?php 
	//si no se a enviado
if (!isset($_GET['agregar'])):
	$_GET['total'] = 0;
else:
	//si ya se envio
	$rubro = $_GET['cantidad'] * $_GET['precio'];
	$_GET['total'] += $rubro;
endif;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tienda Pepito</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="style.css">
</head>
<body>
<header>
	<h1>ApPepito</h1>
</header>
<section>
	<h2>Producto</h2>
	<form method="GET">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="number" name="precio" placeholder="Precio" min="50">
		<input type="number" name="cantidad" placeholder="Cantidad" min="1">
		<span><p>Total: </p></span>
		<input type="number" name="total" value="<?= $_GET['total']  ?>">
		<input type="submit" name="agregar" value="Agregar">
	</form>

</section>
</body>
</html>