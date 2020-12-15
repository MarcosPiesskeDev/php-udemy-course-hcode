<?php
//Creating by created image

$image = imagecreatefromjpeg('images/certificado.jpg');

$titleColor = imagecolorallocate($image, 0, 0, 0);
$grey = imagecolorallocate($image, 100, 100, 100);

$name = "devanei aparecido";

imagestring($image, 5, 450, 150, "CERTIFICATE", $titleColor);
imagestring($image, 5, 440, 350, ucwords($name), $titleColor);
imagestring($image, 3, 440, 370, "Completed: ".date("d/m/Y"), $titleColor);

header('Content-Type: image/jpeg');

imagejpeg($image);

imagedestroy($image);
