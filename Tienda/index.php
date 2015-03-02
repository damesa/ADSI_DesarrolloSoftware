<?php 
	//si no se a enviado
if (!isset($_POST['agregar'])):
	$_POST['total'] = 0;
else:
	//si ya se envio
	$rubro = $_POST['cantidad'] * $_POST['precio'];
	$_POST['total'] += $rubro;
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
	<form method="POST">
		<input type="text" name="nombre" placeholder="Nombre" required>
		<input type="number" name="precio" placeholder="Precio" min="50" required>
		<input type="number" name="cantidad" placeholder="Cantidad" min="1" required>
		<span><p>Total: </p></span>
		<input type="number" name="total" value="<?= $_POST['total']  ?>">
		<input type="submit" name="agregar" value="Agregar">
	</form>
</section>
<section class="lista">
	<?php $lista="" ?>
	<!-- 	articulos:{
			 1 :{
					nombre: "",
					cantidad: 0,
					precio: 0
			 }
		} -->
	<ul>	
	<?php foreach ($articulos as $id => $datos) { ?>
		<li>
		<?php
			foreach ($datos as $key => $value) {
				<input type="text" class="$key" value="$value">
		}?>
		</li>
	<?php } ?>
	</ul>
	<ul>
		<li>
			<input type="text">
			<input type="text">
			<input type="text">
		</li>
	</ul>
</section>
</body>
</html>