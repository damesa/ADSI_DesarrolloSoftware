<?php 

	require 'config.php';
	require '../lib/JpGraph-master/src/jpgraph.php';
	require '../lib/JpGraph-master/src/jpgraph_bar.php';

	//crear objeto de la clase graph
		$graph = new Graph(400,300,'auto');
		$graph->SetScale("textlin");
		$theme_class=new VividTheme;
		$graph->SetTheme($theme_class);

		$graph->Set90AndMargin(100,0,50,10);
	
		$graph->ygrid->Show(false);
		$graph->xaxis->SetTickLabels($data_n);

		// Create the bar plots
		$b1plot = new BarPlot($data_u);
		$graph->title->Set("");
		// ...and add it to the graPH
		$graph->Add($b1plot);

		$b1plot->SetWeight(0);

		$b1plot->SetWidth(10);

		//Display the graph
		$graph->Stroke();