<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH.'/Autoloader.php';

$doc = new \phpDocumentCreator\Document('swoole');
//var_dump($doc->getDict('swoole'));
//$doc->updateDict('swoole', \phpDocumentCreator\Tool::export('swoole'));
$doc->create();




