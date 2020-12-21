<?php

require_once('vendor/autoload.php');

use Rain\Tpl;

$config = [
    "tpl_dir" => "template/",
    "cache_dir" => "cache/",
];

Tpl::configure($config);

Tpl::registerPlugin(new Tpl\Plugin\PathReplace());

$tplObj = new Tpl;

//We can send this to your template with key(name) and value(Doc Emmet)
$tplObj->assign("name", "Doc Emmet");

$tplObj->assign("version", PHP_VERSION);

$tplObj->draw("index");