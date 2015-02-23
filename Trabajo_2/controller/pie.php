<?php 
	
	require "helpers.php";
	require '../lib/JpGraph-master/src/jpgraph.php';
	require '../lib/JpGraph-master/src/jpgraph_pie.php';
	require '../lib/JpGraph-master/src/jpgraph_pie3d.php';
	
	require '../model/db.php';

	$db = new db($_GET['db'],$_GET['tb']);
	var_dump($db->data['values']);

	$piegraph = new PieGraph(500, 400, "auto");

	$piegraph->SetScale("textlin");

	$pieplot = new PiePlot3D(array(1,2,3));/*$db->data['values']*/
	$pieplot->SetTheme("pastel");
	//cargar legenda de datos
	$pieplot->SetLegends(array('1','2','3'));/*$db->data['labels']*/
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
	//$piegraph->Stroke();

