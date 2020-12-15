<?php
//Creating by created image with fonts

$image = imagecreatefromjpeg('images/certificado.jpg');

$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

$name = "devanei aparecido";

imagettftext($image, 32, 0, 345, 250, $titleColor, 'font'.DIRECTORY_SEPARATOR.'Montserrat'.DIRECTORY_SEPARATOR.'Montserrat-Regular.ttf', "CERTIFICATE");
imagettftext($image, 32, 0, 295, 350, $titleColor,'font'.DIRECTORY_SEPARATOR.'Montserrat'.DIRECTORY_SEPARATOR.'Montserrat-ThinItalic.ttf', ucwords($name));
imagettftext($image, 12, 0, 410, 440, $titleColor, 'font'.DIRECTORY_SEPARATOR.'Montserrat'.DIRECTORY_SEPARATOR.'Montserrat-Medium.ttf', "Completed: ".date("d/m/Y"));

header('Content-Type: image/jpeg');

imagejpeg($image);

imagedestroy($image);
