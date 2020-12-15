<?php

header('Content-Type: image/png');

$image = imagecreate(256, 256);

$black = imagecolorallocate($image, 254, 254, 254);

$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 150, "Curso PHP test.", $red);

imagepng($image);

imagedestroy($image);