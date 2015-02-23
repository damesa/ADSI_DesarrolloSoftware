<?php 
	//config databese
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = 'root';
	$db_db  = 'pizarradeyuri';
	$db_table = 'tecnologia';
	date_default_timezone_set('America/Bogota');
	//conexion
	$conexion = mysqli_connect($db_host,$db_user,$db_pass,$db_db);
	echo mysql_error();

	//cargar datos
	// mysql_select_db($db_db,$conexion);

	$sql = "SELECT * FROM $db_table";
	$data= mysqli_query($conexion,$sql);

	$data_n = array();
	$data_u = array();

	while ($fila = mysqli_fetch_array($data)) {
		$data_n[] =  $fila['nombre'];
		$data_u[] =  $fila['respuesta'];
	} 