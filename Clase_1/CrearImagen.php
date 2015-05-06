<?php

header("Content-type: image/jpg");
//se define variable de tipo imagen
$image = imagecreatetruecolor(400, 400);

//se define un color
$blanco = imagecolorallocate($image, 100, 250, 250);
$blue = imagecolorallocate($image, 0, 0, 250);
$rojo = imagecolorallocate($image, 250, 0, 0);
$otroRojo = imagecolorallocate($image, 250, 0, 100);
imagefilltoborder($image, 50, 50, $blue, $blanco);

imagefilledrectangle($image, 10, 10, 200, 200, $rojo);
imagefilledellipse($image, 200, 200, 250, 250, $otroRojo);


/*===============================*/
//se crea la imagen
imagejpeg($image);
//se destrulle la imagen
imagedestroy($image);?>