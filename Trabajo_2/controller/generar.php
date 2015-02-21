<?php 
	
	CargarModel('db');

	//creo objeto db
	 $db = new db();
	 //realizo mi conexio  
	$db->nombre = $_POST['db'];
	$db->tabla = $_POST['tb'];
	
	$db->Actualizar();
	//  $data_u = $db->$data[1];
	//  $data_n = $db->$data[0];
	 //genero el grafico pie (torta)

	$_POST['titulo']=$db->tabla;
	CargarView('lienzo');

 ?>