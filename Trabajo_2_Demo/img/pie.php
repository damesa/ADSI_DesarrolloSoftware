<?php 
  
  date_default_timezone_set('America/Bogota');
   require 'helpers.php';
  $DB_NOMBRE = 'pizarradeyuri';
  $DB_TABLA = 'tecnologia';

  $conection = mysqli_connect("blast-monarch","root","","$DB_NOMBRE");

  $sql ="SELECT * FROM $DB_TABLA";

  $tabla = mysqli_query($conection,$sql);

  $data_n = array();
  $data_u = array();
  
  while ( $fila= mysqli_fetch_array($tabla)) {
    $data_n[] = $fila['nombre'];
    $data_u[] = $fila['respuesta'];
  }
 // var_dump($data_u);

  function posmayor($array)
  {
    $mayor = $array[0];
    $posmayor = 0;

    foreach ($array as $key => $value) {
      if ($mayor<$value) {
        $mayor = $value;
        $posmayor = $key;
      }
    }

      return $posmayor;
  }


  function posmenor($array)
  {
    $menor = $array[0];
    $posmenor = 0;

    foreach ($array as $key => $value) {
      if ($menor > $value) {
        $menor = $value;
        $posmenor = $key;
      }  
    }
      return $posmenor;
  }

  function concatenar($string,$array)
  {
         
    foreach ($array as $key => $nombre) {
      $nombre = saltolinea($nombre);

      $array[$key] = $nombre.$string;
    }

    return $array;
  }

  function saltolinea($value)
  {
     if (strlen($value)>25) {
          $cada=20;
     }
     else{
        $cada =12;
     }
    
     $c="\n ";
     while (strlen($value)>=$cada-1) {
        $value= substr($value,0,$cada).$c.substr($value,$cada);
        $cada+=$cada;
     }
     return $value;
  }

  //++++++++++++++++
  require pathjpgraph('jpgraph.php');
  require pathjpgraph('jpgraph_pie.php');
  require pathjpgraph('jpgraph_pie3d.php');
  $piegraph = new PieGraph(700, 450, "auto");

  $piegraph->SetScale("textlin");
  // $theme_class = new OrangeTheme;
  // $piegraph->SetTheme($theme_class);
  $pieplot = new PiePlot($data_u);
  //cargar legenda de datos
  // $pieplot->SetLegends($data_n);
  //tamaño - referente al lienzo
    $pieplot->SetSize(200);
     // $pieplot->SetAngle(70);
    //separar un fragmento
    $pieplot->ExplodeSlice(posmayor($data_u));
    //separa todo
    // $pieplot->ExplodeAll();
    // $pieplot->value->SetFont(FF_FONT1,FS_BOLD);
    //color del valor
    $pieplot->value->SetColor("blue");
    //mover pos del valor
    $pieplot->SetLabels(concatenar(" %.1f%%",$data_n));
    $pieplot->SetLabelPos(0.9);
   // $pieplot->value->SetFont(FF_ARIAL,FS_NORMAL,8);
    
    $pieplot->SetGuideLinesAdjust(0.8);

  $piegraph->Add($pieplot);
  $piegraph->Stroke();


 ?>