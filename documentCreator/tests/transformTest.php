<?php
define('ROOT_PATH', dirname(__DIR__));
require_once ROOT_PATH.'/Autoloader.php';


/*
$doc = new \documentCreator\Document('Redis');
$transform = new \documentCreator\Transform('./notes/redis.php');
$data = $transform->info('X', '');
$doc->updateDict('redis', $data);

$doc->create();
*/

/*
$doc = new \documentCreator\Document('Yaf');
$transform = new \documentCreator\Transform('./notes/yaf.php');
$data = $transform->info('X', '_');
$doc->updateDict('yaf', $data);

$doc->create();
*/

/*
$doc = new \documentCreator\Document('Yaf');
$transform = new \documentCreator\Transform('./notes/yaf.php');
$data = $transform->info('X', "\\");
$doc->updateDict('yaf', $data);

$doc->create();
*/
/*
$doc = new \documentCreator\Document('swoole');
$transform = new \documentCreator\Transform('./notes/swoole.php');
$data = $transform->info('X', "_");

//var_dump($data['constants']);

$doc->updateDict('swoole', $data);

$doc->create();
*/