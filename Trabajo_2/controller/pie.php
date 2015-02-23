<?php 
	date_default_timezone_set('America/Bogota');
	require '../lib/JpGraph-master/src/jpgraph.php';
	require '../lib/JpGraph-master/src/jpgraph_pie.php';
	require '../lib/JpGraph-master/src/jpgraph_pie3d.php';
	require "helpers.php";
	
	CargarModel('db');

	$db = new db($_POST['db'],$_POST['tb']);
		
	$db->Actualizar();

	$piegraph = new PieGraph(500, 400, "auto");

	$piegraph->SetScale("textlin");

	$pieplot = new PiePlot3D($db->data['values']);
	$pieplot->SetTheme("pastel");
	//cargar legenda de datos
	$pieplot->SetLegends($db->data['labels']);
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
	$piegraph->Stroke();

