
<?php
=======
header("Content-type: image/png");
//se define variable de tipo imagen
$image = imagecreatetruecolor(400, 600);

$fondo = imagecolorallocate($image, 18, 144, 255);
$rojo = imagecolorallocate($image, 255, 0, 0);

imagefilltoborder($image, 50, 50, $fondo, $fondo);

generarTabla($image,'ventasM');
//se crea la imagen
imagePNG($image);
//se destrulle la imagen
imagedestroy($image);
/*===============================*/

function generarTabla($image,$tabla){
    //creamos las figuras punto1 , punto 2
	// para lo cual seria x1,y1  ,  x2,y2
	// respectivamente INICIO,BASE,ANCHO,ALTO
	$base = 380;
	$inicio = 10;
	$ancho = 20;
	$font = "LBRITEDI.ttf";

	//conexion y query
	$conexion = mysql_connect("localhost","root","");
	mysql_select_db('supermercado',$conexion);
	$sql = "SELECT * FROM ".$tabla.""; 
	$resultado = mysql_query($sql);

	while($fila = mysql_fetch_array($resultado)){
		  //crea una columna de la tabla
		 imagefilledrectangle($image, $inicio,$base,$inicio+$ancho, $base -$fila['valor'], generaColor($image));
		 //se agega el texto  a la columna
		 imagettftext($image, 10, -50, $inicio, $base+10,null, $font, $fila['nombre']);
		 //para el espacio entre columnas
	  	$inicio += $ancho+10;
	}
}

function generaColor($img){
	$rgb = array(0,0,0);
	for ($i=0; $i < 3; $i++) { 
		$rand = rand (100,255);
		$rgb[$i] = $rand;
	}
	return imagecolorallocate($img, $rgb[0], $rgb[1], $rgb[2]);
}

?>