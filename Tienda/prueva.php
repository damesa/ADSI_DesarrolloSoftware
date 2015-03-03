<?php 
 date_default_timezone_set("America/Bogota") ;

    if (isset($_POST['enviar'])) {
           $arr = array();
           $nombre =  $_POST['nombre'];
           $precio =  $_POST['precio'];
           $cantidad =  $_POST['cantidad'];

           $arr = json_decode($_POST['lista']);
           $arr[] = compact("nombre","precio","cantidad");
    }
    else{
    	$arr = array();
		$_POST['lista'] = $arr;
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
 		<input type="text" name="nombre">
 		<input type="text" name="precio">
 		<input type="text" name="cantidad">
 		<?php $json = json_encode($arr) ?>
 		<input name="lista" value='<?=$json?>'> 
 		<input type="submit" name="enviar" value="enviar">
 	</form>
 	<?php
 		echo $json;
 		echo "</br>";
 		echo $_POST['lista'];
 	 ?>
 </body>
 </html>