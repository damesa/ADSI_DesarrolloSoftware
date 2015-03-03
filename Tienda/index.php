<?php 
date_default_timezone_set("America/Bogota") ;

//si no se a enviado
if (!isset($_POST['agregar'])):
	$_POST['total'] = 0;
	$_POST['articulos'] = array();
else:
	//datos enviados
	$nombre   = $_POST['nombre'];
	$cantidad = $_POST['cantidad'];
	$precio   = $_POST['precio'];

	$rubro = $cantidad * $precio;
	$_POST['total'] += $rubro;

	//presintencia de datos
	$art =  array('n' =>$nombre,'c'=>$cantidad,'p'=>$precio);

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
	
</section>
</body>
</html>



