<?php 
	require 'controller/helpers.php';
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Graficas</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

		if (isset($_GET['url'])) {
			cargarcontroller($_GET['url']);
		}
		else{
			cargarcontroller('home');
		}
	 ?>
</body>
</html>