<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH.'/Autoloader.php';
use phpDocumentCreator\Tool as Tool;
$yac = new Yac();
$yac->set('test', 'hello');
$yac->set('goods', 'world');
var_dump($yac->dump());

var_dump(Tool::getIniEntries(new ReflectionExtension('yac')));