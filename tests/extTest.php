<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH.'/Autoloader.php';

$doc = new \phpDocumentCreator\Document('xhprof');
$doc->create();

/*
$doc = new \phpDocumentCreator\Document('msgpack');
$doc->createDict();
$doc->create();

*/




