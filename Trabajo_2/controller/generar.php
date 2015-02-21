<?php 
	
	CargarModel('db');


	 $db = new db($_POST['db'],$_POST['tb']);
	 $conexion = mysql_connect($db->host,$db->user,$db->pass);

	$_POST['titulo']=$_POST['db'];
	CargarView('lienzo');

 ?>