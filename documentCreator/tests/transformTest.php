<?php
require_once '../Autoloader.php';
$doc = new \documentCreator\Document('Redis');
$transform = new \documentCreator\Transform('./notes/redis.php');
var_dump($transform->info('X', ''));
//$doc->updateDict('redis', $transform->info('X', ''));
//$doc->create();