<?php 
	date_default_timezone_set('America/Bogota');
	include 'helpers.php';
	require '../model/db.php';

	//creo objeto db
	 $db = new db($_GET['db'],$_GET['tb']);
	 //realizo mi conexio  
	 $db->Actualizar();
	 
	 $_POST['data_labels']=implode(",",$db->data['labels']);
	 $_POST['data_values']=implode(",",$db->data['values']);

	 require '../model/pie.php';
?> 