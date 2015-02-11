<?php

header("Content-type: image/jpg");
//se define variable de tipo imagen
$image = imagecreatetruecolor(400, 400);



//se define un color
$blue = imagecolorallocate($image, 0, 0, 250);
$rojo = imagecolorallocate($image, 250, 0, 0);

//creamos las figuras punto1 , punto 2
// para lo cual seria x1,y1  ,  x2,y2
//base de la tabla
$base = 380;
$ancho = 20;
imagefilledrectangle($image, 20,$base,20+$ancho, 200, $rojo);
imagefilledrectangle($image, 50,$base,50+$ancho,220, $blue);
imagefilledrectangle($image, 80,$base,80+$ancho,220, $blue);

/*===============================*/
//se crea la imagen
imagejpeg($image);
//se destrulle la imagen
imagedestroy($image);?>