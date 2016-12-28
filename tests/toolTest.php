<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH.'/Autoloader.php';

use phpDocumentCreator\Tool as Tool;
/*
$ref = new ReflectionExtension('msgpack');
var_dump(Tool::export('msgpack'));

*/

//var_dump(Tool::getLocalFunctions('xhprof'));
var_dump(json_encode(Tool::export('xhprof')));



