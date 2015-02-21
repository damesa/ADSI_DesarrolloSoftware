<?php 
	
	CargarModel('db');

	//creo objeto db
	 $db = new db($_POST['db'],$_POST['tb']);
	 //realizo mi conexio  
	
	$conexion = mysqli_connect($db->host,$db->user,$db->pass);
	$db->Actualizar($conexion);
	//  $data_u = $db->$data[1];
	//  $data_n = $db->$data[0];
	 //genero el grafico pie (torta)

	$_POST['titulo']=$db->db_db;
	CargarView('lienzo');

 ?>