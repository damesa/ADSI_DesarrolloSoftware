<?php
header("Content-type: image/jpg");
//se define variable de tipo imagen
$image = imagecreatetruecolor(400, 400);
//DATOS DE MI db
$ventas = [
	"enero" => 200,
	"febrero" => 300,
	"marzo" => 100,
	"abril" => 150
];

$fondo = imagecolorallocate($image, 18, 144, 255);
imagefilltoborder($image, 50, 50, $fondo, $fondo);
generarTabla($image,$ventas);
//se crea la imagen
imagejpeg($image);
//se destrulle la imagen
imagedestroy($image);
/*===============================*/
//creamos las figuras punto1 , punto 2
// para lo cual seria x1,y1  ,  x2,y2
// respectivamente INICIO,BASE,ANCHO,ALTO
function generarTabla($image,$datos){
	$base = 380;
	$inicio = 10;
	$ancho = 20;
	$alto_img = imagesy($image);
	foreach ($datos as $key => $value) {
	 // key = febrero y value = 300
	  imagefilledrectangle($image, $inicio,$base,$inicio+$ancho, $alto_img -$value, generaColor($image));
	  /* como va hacia abajo, febrero seria la columna mas corta
	  * mediendo 100, para corregir eso 400-300 = 100
	  * por lo tando de 400 a 100 hay 300 ese seria el alto
	  */
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