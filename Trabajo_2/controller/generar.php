<?php 
	
	CargarModel('db');

	//creo objeto db
	 $db = new db($_POST['db'],$_POST['tb']);
	 //realizo mi conexio  
	date_default_timezone_set('America/Bogota');
	 $conexion = mysqli_connect($db->host,$db->user,$db->pass);
	 $db->Actualizar($conexion,$_POST['db'],$_POST['tb']);
	 $data_u = $db->$data[1];
	 $data_n = $db->$data[0];
	 //genero el grafico pie (torta)

	$_POST['titulo']=$_POST['db'];
	CargarView('lienzo');

 ?>