<?php 

    date_default_timezone_set('America/Bogota');

  $DB_NOMBRE = 'pizarradeyuri';
  $DB_TABLA = 'tecnologia';

  $conection = mysqli_connect("localhost","root","root","$DB_NOMBRE");
  mysqli_error();
  $sql ="SELECT * FROM $DB_TABLA";

  $tabla = mysqli_query($conection,$sql);

  $data_n = array();
  $data_u = array();
  
  while ( $fila= mysqli_fetch_array($tabla)) {
    $data_n[] = $fila['nombre'];
    $data_u[] = $fila['respuesta'];
  }
 // var_dump($data_u);
  require '../lib/JpGraph-master/src/jpgraph.php';
  require '../lib/JpGraph-master/src/jpgraph_bar.php';

  //crear objeto de la clase graph
    $graph = new Graph(600,300,'auto');
    $graph->SetScale("textlin");
    $theme_class=new PastelTheme;
    $graph->SetTheme($theme_class);

    $graph->Set90AndMargin(200,0,50,10);
  
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



 ?>