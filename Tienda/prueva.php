<?php 
 date_default_timezone_set("America/Bogota") ;
   $array = array('hola' => 'mundo' );
   if (isset($_POST['value'])) {
   	 $array[] = $_POST['value'];
   }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Prueva</title>
 	<link rel="stylesheet" href="style.css">
 </head>
 <body>
 	<form method="POST">
 		<input type="text" name="value">
 		<input type="submit" value="enviar">
 	</form>
	<?php $_POST['hola'] = $array ?>
	<p> <?php echo var_dump($_POST['hola']); ?></p>	
	<?php $array2 = $_POST['hola']; ?>
	<?php var_dump($array2); ?>
 </body>
 </html>