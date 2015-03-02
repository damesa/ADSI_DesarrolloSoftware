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
</head>
<body>
<header>
	<h1>ApPepito</h1>
</header>
<section>
	<form method="GET">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="number" name="precio" placeholder="Precio">
		<input type="number" name="cantidad" placeholder="Cantidad">
		<span>Total: </span>
		<input type="number" name="total" value="<?= $_GET['total']  ?>">
		<input type="submit" name="agregar" value="Agregar">
	</form>
	<div class="lista">
		<?php if (condition): while (/*argumento*/) {
			# code...
		} ?>
		<?php endif ?>
	</div>
</section>
</body>
</html>