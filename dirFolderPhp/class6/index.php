<?php

$link = "https://www.google.com/logos/doodles/2020/december-holidays-days-2-30-6753651837108830.3-law.gif";

$content = file_get_contents($link);

$parse = parse_url($link);

$basename = basename($parse["path"]);

$file = fopen($basename, "w+");

fwrite($file, $content);

fclose($file);

?>

<img src="<?=$basename?>"