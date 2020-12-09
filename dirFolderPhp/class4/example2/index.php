<?php

$filename = 'delorean.jpeg';

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimeType = $fileinfo->file($filename);

$base64Encode = 'data:' . $mimeType . ';base64,' . $base64;

?>

<html>
    <a href="<?=$base64Encode?>" target="_blank">Link para imagem</a>

    <img src="<?=$base64Encode?>"/>
</html>