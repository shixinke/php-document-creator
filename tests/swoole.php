<?php
require_once "../src/phpDocumentCreator/Tool.php";

use phpDocumentCreator\Tool;

//$data = Tool::export('swoole');

//var_dump(array_keys($data['classes']));

//var_dump(class_exists('Co\Http\Server'));

//var_dump(get_class_methods('Co\Http\Server'));

//var_dump(method_exists('Co', 'fgets'));

$coHttpServer = new \ReflectionClass('Co\Http\Server');
var_dump($coHttpServer);

/*
$swoole = new \ReflectionExtension('swoole');
$classes = $swoole->getClasses();
foreach ($classes as $class) {
    if ($class->getName() == 'Swoole\\Coroutine') {
        var_dump($class->getMethods());
    }
}
*/