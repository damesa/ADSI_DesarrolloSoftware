<?php 
	//config databese
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = 'root';
	$db_db  = 'musica';
	$db_table = 'instrumentos';

	//conexion
	$conexion = mysql_connect($db_host,$db_user,$db_pass);
	echo mysql_error();

	//cargar datos
	mysql_select_db($db_db,$conexion);

	$sql = "SELECT * FROM instrumentos";
	$data= mysql_query($sql);

	$data_n = array();
	$data_u = array();

	while ($fila = mysql_fetch_array($data)) {
		$data_n[] =  $fila['nombre'];
		$data_u[] =  $fila['uso'];
	} 