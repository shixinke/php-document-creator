<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH.'/Autoloader.php';

use phpDocumentCreator\Tool as Tool;

var_dump(Tool::getConstants(new ReflectionExtension('swoole')));



