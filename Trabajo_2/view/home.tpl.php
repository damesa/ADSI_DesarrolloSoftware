<?php 
	include 'header.tpl.php';
 ?>
 	<h1>Crear Grafica Onlie</h1>
 	<form action="index.php?url=generar" method="POST">
 		<input type="text"  name="db"		placeholder="Nombre de Base de Datos">
 		<input type="text"  name="tb"		placeholder="Nombre de la Tabla">
 		<input type="text"  name="titulo"	placeholder="Titulo del Grafico">
 		<input type="text" 	name="nota"		placeholder="Nota pie de Grafico">
 		<input type="submit" value="Generar">
 	</form>
<?php 
	include 'footer.tpl.php';
 ?>