<?php
require_once "../Autoloader.php";


$srcFile = "../data/dict/fastdfs_client/fastdfs_client.json";
$dstFile = "../data/dict/fastdfs_client/fastdfs.json";
$content = file_get_contents($srcFile);
$arr = json_decode($content, true);
$methods = array();
foreach ($arr['functions'] as $m => $mValue) {
    $name = str_replace('fastdfs_', '', $m);
    $methods[$name] = $mValue;
}


$clsContent = file_get_contents($dstFile);
$clsArr = json_decode($clsContent, true);
$dstMethods = $clsArr['methods'];
foreach($dstMethods as $method => $value) {
    $dstMethod = $method;
    if (!$value['comment'] || $value['comment'] == '') {
        if (isset($methods[$dstMethod])) {
            $dstMethods[$method] = $methods[$dstMethod];
        }
    }
}
$clsArr['methods'] = $dstMethods;
//var_dump($clsArr['methods']);
file_put_contents($dstFile, json_encode($clsArr, JSON_UNESCAPED_UNICODE));

