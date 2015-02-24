<?php 
	
	require "helpers.php";
	require '../lib/JpGraph-master/src/jpgraph.php';
	require '../lib/JpGraph-master/src/jpgraph_pie.php';
	require '../lib/JpGraph-master/src/jpgraph_pie3d.php';
	
    $db_host = 'localhost';
	$db_user = 'root';
	$db_pass = 'root';
	$conexion = mysqli_connect($db_host,$db_user,$db_pass,$_POST['db']);
	echo mysql_error();

	//cargar datos
	// mysql_select_db($db_db,$conexion);

	$sql = "SELECT * FROM $_POST['tb']";
	$data= mysqli_query($conexion,$sql);

	$data_n = array();
	$data_u = array();

	while ($fila = mysqli_fetch_array($data)) {
		$data_n[] =  $fila['nombre'];
		$data_u[] =  $fila['respuesta'];
	} 
	
	$piegraph = new PieGraph(500, 400, "auto");

	$piegraph->SetScale("textlin");

	$pieplot = new PiePlot3D($data_u);/*$db->data['values']*/
	$pieplot->SetTheme("pastel");
	//cargar legenda de datos
	$pieplot->SetLegends($data_n);/*$db->data['labels']*/
	//tamaño - referente al lienzo
  	$pieplot->SetSize(0.30);
  	$pieplot->SetCenter(0.5,0.4);
  	$pieplot->SetAngle(70);
  	//separar un fragmento
  	// $pieplot->ExplodeSlice(2);
  	//separa todo
  	$pieplot->ExplodeAll();
  	$pieplot->value->SetFont(FF_FONT1,FS_BOLD);
  	//color del valor
  	$pieplot->value->SetColor("blue");
  	//mover pos del valor
  	$pieplot->SetLabelPos(0.8);
	

	$piegraph->Add($pieplot);
	// $piegraph->Stroke();

