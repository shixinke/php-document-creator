<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH.'/Autoloader.php';


/*
$doc = new \phpDocumentCreator\Document('Redis');
$transform = new \phpDocumentCreator\Transform('./notes/redis.php');
$data = $transform->info('X', '');
$doc->updateDict('redis', $data);

//$doc->create();
*/


$doc = new \phpDocumentCreator\Document('Yaf');
$transform = new \phpDocumentCreator\Transform('./notes/yaf.php');
$data = $transform->info('X', '_');
$doc->updateDict('yaf', $data);

$doc->create();


/*
$doc = new \phpDocumentCreator\Document('Yaf');
$transform = new \phpDocumentCreator\Transform('./notes/yaf.php');
$data = $transform->info('X', "\\");
$doc->updateDict('yaf', $data);

$doc->create();
*/

/*
$doc = new \phpDocumentCreator\Document('swoole');
$doc->createDict();
*/

/*
$doc = new \phpDocumentCreator\Document('swoole');
$transform = new \phpDocumentCreator\Transform(__DIR__.'/notes/swoole.php');
$data = $transform->info('X', "_");
$doc->updateDict('swoole', $data);
//$doc->create();
*/

$doc = new \phpDocumentCreator\Document('yar');
$doc->createDict();

$doc = new \phpDocumentCreator\Document('yac');
$doc->createDict();

$doc = new \phpDocumentCreator\Document('yaconf');
$doc->createDict();



