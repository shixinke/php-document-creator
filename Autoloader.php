<?php
defined('ROOT_PATH') or define('ROOT_PATH', dirname(__DIR__));
spl_autoload_register(function($class){
    $prefix = 'phpDocumentCreator\\';
    $baseDir = ROOT_PATH . '/src/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }

    //$relativeClass = substr($class, $len);
    $file = $baseDir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
