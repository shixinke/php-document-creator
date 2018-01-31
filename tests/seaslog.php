<?php
require_once '../src/phpDocumentCreator/Tool.php';

$data = \phpDocumentCreator\Tool::export("seaslog");

var_dump($data['ini']);